<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DailyMotivationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersSettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\OnlineUserController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PrivacyPolicyController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('index');
// Profile Route
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/profile/settings', [UsersSettingsController::class, 'index'])->name('profiles.settings.settings');

// Profile Picture Route
Route::post('/update-profile-picture', function (Request $request) {
    $user = Auth::user();
    if ($user->profile_picture_updated_at && $user->profile_picture_updated_at->addDay()->gt(now())) {
        return back()->with('error', 'You can only change your profile picture once every 24 hours.');
    }
    if ($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()) {
        if ($user->profile_picture) {
            Storage::delete($user->profile_picture);
        }
        $path = $request->file('profile_picture')->store('public/profile-pictures');
        $user->profile_picture = $path;
        $user->profile_picture_updated_at = now();
        $user->save();
        return back()->with('success', 'Profile picture uploaded successfully.');
    } else {
        return back()->with('error', 'There was an error uploading the profile picture.');
    }
})->name('update-profile-picture');
// Privacy Policy
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'showPrivacyPolicy'])->name('privacy-policy');

Route::get('/online', [OnlineUserController::class, 'onlineUser'])->name('onlineUser');
Route::get('/users/{id}', [ProfilesController::class, 'showing'])->name('profiles.show');

Route::get('/online', [OnlineUserController::class, 'onlineUser'])->name('onlineUser');
Route::get('/users/{id}', [ProfilesController::class, 'showing'])->name('profiles.show');

// Categories Routes
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


// Skills Routes
Route::get('skills/pending', [SkillController::class, 'pending'])->name('skills.pending');
Route::post('skills/{skill}/approve', [SkillController::class, 'approve'])->name('skills.approve');
Route::put('/skills/{skill}/notapprove', [SkillController::class, 'notapprove'])->name('skills.notapprove');
Route::get('/skill', [SkillController::class, 'index'])->name('skills.index');
Route::get('/my-skills', [SkillController::class, 'mySkills'])->name('skills.myskills');
Route::get('skills/create', [SkillController::class, 'create'])->name('skills.create');
Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');

// Exercises Routes
Route::get('/my-exercises', [ExerciseController::class, 'myExercise'])->name('exercises.myexercises');
Route::get('/exercises', [ExerciseController::class, 'index'])->name('exercises.index');
Route::get('/exercises/create', [ExerciseController::class, 'create'])->name('exercises.create');
Route::post('/exercises', [ExerciseController::class, 'store'])->name('exercises.store');
Route::put('/exercises/{exercise}/approve', [ExerciseController::class, 'approve'])->name('exercises.approve');
Route::get('/exercises/pending', [ExerciseController::class, 'pending'])->name('exercises.pending');
Route::delete('/exercises/{exercise}', [ExerciseController::class, 'delete'])->name('exercises.delete');
Route::get('/daily-motivation', [DailyMotivationController::class, 'show']);

Route::group(['middleware' => ['role:admin']], function () {
    /* Admin Routes */
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('admin.users.show');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});

// Auth Routes
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('/');

