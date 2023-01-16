<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(DashboardController::class)->group(function () {
    Route::get('/admin/dashboard', 'admin_dashboard')->name('admin.dashboard');
});


Route::prefix('admin/')->group(function() {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('admin.category.index');
        Route::get('/category/add', 'create')->name('admin.category.add');
        Route::post('/category/add', 'store')->name('admin.category.store');
        Route::get('/category/edit/{category}', 'edit')->name('admin.category.edit');
        Route::post('/category/edit/{category}', 'update')->name('admin.category.update');
        Route::get('/category/delete/{category}', 'destroy')->name('admin.category.delete');
    });

    Route::controller(CourseController::class)->group(function () {
        Route::get('/course', 'index')->name('admin.course.index');
        Route::get('/course/add', 'create')->name('admin.course.add');
        Route::post('/course/add', 'store')->name('admin.course.store');
        Route::get('/course/edit/{course}', 'edit')->name('admin.course.edit');
        Route::post('/course/edit/{course}', 'update')->name('admin.course.update');
        Route::get('/course/delete/{course}', 'destroy')->name('admin.course.delete');
    });

    Route::controller(PaymentMethodController::class)->group(function () {
        Route::get('/payment-method', 'index')->name('admin.payment_method.index');
        Route::get('/payment-method/add', 'create')->name('admin.payment_method.add');
        Route::post('/payment-method/add', 'store')->name('admin.payment_method.store');
        Route::get('/payment-method/edit/{payment_method}', 'edit')->name('admin.payment_method.edit');
        Route::post('/payment-method/edit/{payment_method}', 'update')->name('admin.payment_method.update');
        Route::get('/payment-method/delete/{payment_method}', 'destroy')->name('admin.payment_method.delete');
    });
});

require __DIR__.'/auth.php';
