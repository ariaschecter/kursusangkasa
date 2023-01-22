<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified')->prefix('user')->group(function() {
    Route::controller(CourseController::class)->group(function () {
        Route::get('/course', 'user_index')->name('user.course.index');
        Route::get('/course/{course:course_slug}/continue', 'user_continue')->name('user.course.continue');
    });

    Route::controller(WalletController::class)->group(function () {
        Route::get('/wallet', 'user_index')->name('user.wallet.index');
        Route::get('/wallet/method', 'user_method')->name('user.wallet.method');
        Route::post('/wallet/update/{wallet}', 'user_update')->name('user.wallet.update');
        Route::get('/wallet/withdraw', 'user_withdraw')->name('user.wallet.withdraw');
        Route::post('/wallet/withdraw', 'user_withdraw_store')->name('user.wallet.withdraw.store');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::get('/payment', 'user_index')->name('user.payment.index');
    });

    Route::controller(AffiliateController::class)->group(function () {
        Route::get('/affiliate', 'user_index')->name('user.affiliate.index');
    });
});
