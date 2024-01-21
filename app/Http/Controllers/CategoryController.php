<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exercise;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category, Skill $skill, Exercise $exercise, User $user)
    {
        $topSkillUploaders = $category->topSkillUploaders();

        $topSkillUploaders = $topSkillUploaders->sortByDesc('number');

        $topSkillUploaders = $topSkillUploaders->values()->map(function ($user, $index) {
            $user->rank = $index + 1;
            return $user;
        });
        $usersWithPointsAndCategories = User::with([
            'skills' => function ($query) {
                $query->select('user_id', 'category_id', DB::raw('MAX(number) as max_skill_number'))
                    ->groupBy('user_id', 'category_id');
            },
            'skills.category'
        ])
            ->get();

        return view('categories.show', compact('category', 'topSkillUploaders', 'usersWithPointsAndCategories'));
    }
}
