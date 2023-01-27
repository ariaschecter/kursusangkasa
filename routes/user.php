<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified', 'user')->prefix('user')->group(function() {
    Route::controller(CourseController::class)->group(function () {
        Route::get('/course', 'user_index')->name('user.course.index');
        Route::get('/course/continue/{course:course_slug}', 'user_continue')->name('user.course.continue');
        Route::get('/course/{course:course_slug}/{listcourse}', 'user_acces')->name('user.course.acces');
        Route::get('/course/{course:course_slug}/{listcourse}/next', 'user_next')->name('user.course.next');
        Route::get('/course/{course:course_slug}/{listcourse}/prev', 'user_prev')->name('user.course.prev');
    });

    Route::controller(WalletController::class)->group(function () {
        Route::get('/wallet', 'user_index')->name('user.wallet.index');
        Route::get('/wallet/method', 'user_method')->name('user.wallet.method');
        Route::post('/wallet/update/{wallet}', 'user_update')->name('user.wallet.update');
        Route::get('/wallet/withdraw', 'user_withdraw')->name('user.wallet.withdraw');
        Route::post('/wallet/withdraw', 'user_withdraw_store')->name('user.wallet.withdraw.store');
    });

    Route::controller(ReviewController::class)->group(function () {
        Route::post('/review/{course:course_slug}', 'store')->name('user.review.store');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::get('/payment', 'user_index')->name('user.payment.index');
    });

    Route::controller(AffiliateController::class)->group(function () {
        Route::get('/affiliate', 'user_index')->name('user.affiliate.index');
    });
});
