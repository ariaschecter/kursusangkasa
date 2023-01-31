<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;
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

Route::get('/phpinfo', function() {
    $course = \App\Models\Course::first();
    return view('user.access', compact('course'));
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/course', 'course_index')->name('home.course.index');
    Route::get('/course/{course:course_slug}', 'course_show')->name('home.course.show');
    Route::get('/category', 'category_index')->name('home.category.index');
    Route::get('/category/{category:category_slug}', 'category_show')->name('home.category.show');
    Route::get('/teacher/{user:username}', 'teacher_show')->name('home.teacher.show');
    Route::get('/about', 'about_index')->name('home.about.index');
    Route::get('/contact', 'contact_index')->name('home.contact.index');
    Route::post('/contact', 'contact_store')->name('home.contact.store');
});

Route::middleware('auth', 'verified', 'user')->controller(PaymentController::class)->group(function () {
    Route::get('/payment/{course:course_slug}', 'create')->name('home.payment.create');
    Route::post('/payment/{course:course_slug}', 'store')->name('home.payment.store');
});


Route::middleware('auth', 'verified')->controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', 'profile')->name('profile');
    Route::post('/profile/update/{user}', 'profile_update')->name('profile.update');
    Route::get('/admin/dashboard', 'admin_dashboard')->middleware('admin')->name('admin.dashboard');
    Route::get('/instructor/dashboard', 'teacher_dashboard')->middleware('teacher')->name('teacher.dashboard');
    Route::get('/user/dashboard', 'user_dashboard')->middleware('user')->name('user.dashboard');
});

Route::controller(MailController::class)->group(function () {
    Route::get('/cobaemail', 'index');
});

require __DIR__.'/admin.php';
require __DIR__.'/teacher.php';
require __DIR__.'/user.php';
require __DIR__.'/auth.php';
