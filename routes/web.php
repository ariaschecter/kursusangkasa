<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/admin/dashboard', 'admin_dashboard')->name('admin.dashboard');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('admin.category.index');
    Route::get('/category/add', 'create')->name('admin.category.add');
    Route::post('/category/add', 'store')->name('admin.category.store');
    Route::get('/category/edit/{category}', 'edit')->name('admin.category.edit');
    Route::post('/category/edit/{category}', 'update')->name('admin.category.update');
    Route::get('/category/delete/{category}', 'destroy')->name('admin.category.delete');
});


Route::get('/', function () {
    return view('admin.index');
});
