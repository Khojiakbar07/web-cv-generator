<?php

use App\Http\Controllers\DebugController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetController;
use App\Http\Controllers\Auth\SessionsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::any('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::any('/settings', [DashboardController::class, 'settings'])->name('settings');

    // Profile
    Route::resource('profile', ProfileController::class);

    // Resume
    Route::resource('resume', ResumeController::class);

    Route::get('/downloads', [DashboardController::class, 'downloads'])->name('downloads');
    Route::get('/cv_templates', [DashboardController::class, 'templates'])->name('templates');
    Route::get('/cv_template/{slug}', [DashboardController::class, 'template'])->name('template');

    // Additional
    Route::get('/support', [DashboardController::class, 'support'])->name('user.support');
    Route::get('/plans', [DashboardController::class, 'plan'])->name('user.plan');

	Route::get('/user-profile', [DashboardController::class, 'create']);
	Route::post('/user-profile', [DashboardController::class, 'store']);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
    Route::post('/session', [SessionsController::class, 'store']);
});

Route::get('/logout', [SessionsController::class, 'destroy'])->name('logout');

// Debug Route
Route::get('/debug', [DebugController::class, 'index'])->name('debug');
