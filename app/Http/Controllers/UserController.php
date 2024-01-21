<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Exercise;
use App\Models\OnlineUser;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index()
    {

        $users = User::all();
        $onlineUsers = OnlineUser::all();

        return view('admin.users.index', compact('users', 'onlineUsers'));
    }

    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'roles' => 'required|array'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed',
            'roles' => 'required|array'
        ]);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->syncRoles($request->input('roles'));

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();

            return redirect()->route('admin.users.index')->with('success', 'User has been deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('admin.users.index')->with('error', 'Error deleting user');
        }
    }

    public function profile()
    {
        $user = auth()->user();
        $uploads = Skill::with('user', 'category')
            ->select('skills.*')
            ->join(DB::raw('(SELECT category_id, MAX(number) as max_skill_number FROM skills GROUP BY category_id) as s2'), function ($join) {
                $join->on('skills.category_id', '=', 's2.category_id');
                $join->on('skills.number', '=', 's2.max_skill_number');
            })
            ->where('skills.user_id', $user->id)
            ->where('skills.approved', true)
            ->orderBy('s2.max_skill_number', 'desc')
            ->get();

        $totalPoints = $uploads->sum('category.points');
        $uniqueCategoriesCount = $uploads->unique('category_id')->count();

        $exercises = Exercise::where('user_id', $user->id)->where('approved', true)->get()->groupBy('exercise_type')->map(function ($exercises) {
            return $exercises->sortByDesc('repetitions')->first();
        });

        return view('profiles.user_profile.profile', compact('user', 'uploads', 'totalPoints', 'uniqueCategoriesCount', 'exercises'));
    }

}
