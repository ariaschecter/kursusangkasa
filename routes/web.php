<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
    Route::get('/affiliate/{user:username}', 'register_affiliate')->name('home.register.affiliate');
});

Route::middleware('auth', 'verified')->controller(PaymentController::class)->group(function () {
    Route::get('/payment/{course:course_slug}', 'create')->name('home.payment.create');
    Route::post('/payment/{course:course_slug}', 'store')->name('home.payment.store');
});


Route::middleware('auth', 'verified')->controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/admin/dashboard', 'admin_dashboard')->name('admin.dashboard');
    Route::get('/instructor/dashboard', 'teacher_dashboard')->name('teacher.dashboard');
    Route::get('/user/dashboard', 'user_dashboard')->name('user.dashboard');
});


require __DIR__.'/admin.php';
require __DIR__.'/teacher.php';
require __DIR__.'/user.php';
require __DIR__.'/auth.php';
