<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'web'],function () {

    Route::get('/', function () {

        return (Auth::user())? redirect()->route('home') : view('welcome');

    });

    Auth::routes(['verify'=>true]);

    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Routes that requires the authentication
    Route::group(['middleware' => 'auth'],function () {

        Route::get('/users/show/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');

        Route::resource('/posts', \App\Http\Controllers\PostController::class);

        Route::resources([
            '/contacts' => \App\Http\Controllers\ContactController::class,
            '/resumes' => \App\Http\Controllers\ResumeController::class,
            '/study_programs' => \App\Http\Controllers\StudyProgramController::class,
            '/job_positions' => \App\Http\Controllers\JobPositionController::class,
        ]);

        Route::resource('/study_relationships', \App\Http\Controllers\StudyRelationshipController::class)->except(['index', 'show', 'create', 'edit']);

        Route::resource('/job_relationships', \App\Http\Controllers\JobRelationshipController::class)->except(['index', 'show', 'create', 'edit']);

        Route::resource('/friendships', \App\Http\Controllers\FriendshipController::class)->except(['index', 'show', 'create', 'edit']);

        Route::resource('/interactions', \App\Http\Controllers\InteractionController::class)->only(['store', 'destroy']);

        Route::get('/messages/{id}', [\App\Http\Controllers\MessageController::class, 'index'])->name('messages.index');
        Route::get('/notifications', [\App\Http\Controllers\NotificationController::class, 'index'])->name('notifications.index');
        Route::resource('/messages', \App\Http\Controllers\MessageController::class)->only(['store']);

    });

    //Routes that are for admin only!
    Route::group(['middleware' => 'admin'],function () {

        Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

        Route::get('/stats', [\App\Http\Controllers\StatsController::class, 'index'])->name('stats');

        Route::resource('/categories', \App\Http\Controllers\CategoryController::class);

        Route::resource('/skills', \App\Http\Controllers\SkillController::class);

        Route::get('/users/verify/{user}', [\App\Http\Controllers\UserController::class, 'verify'])->name('users.verify');
        Route::get('/users/unverify/{user}', [\App\Http\Controllers\UserController::class, 'unverify'])->name('users.unverify');

    });

});

