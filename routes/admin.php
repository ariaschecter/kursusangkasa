<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseAccesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified', 'admin')->prefix('admin/')->group(function() {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('admin.category.index');
        Route::get('/category/add', 'create')->name('admin.category.add');
        Route::get('/category/archive', 'archive')->name('admin.category.archive');
        Route::post('/category/add', 'store')->name('admin.category.store');
        Route::get('/category/edit/{category}', 'edit')->name('admin.category.edit');
        Route::post('/category/edit/{category}', 'update')->name('admin.category.update');
        Route::get('/category/delete/{category}', 'destroy')->name('admin.category.delete');
        Route::get('/category/restore/{category}', 'restore')->name('admin.category.restore');
    });

    Route::controller(CourseAccesController::class)->group(function () {
        Route::get('/course-acces', 'index')->name('admin.course_acces.index');
    });

    Route::controller(LeaderboardController::class)->group(function () {
        Route::get('/leaderboard/product', 'product')->name('admin.leaderboard.product');
        Route::get('/leaderboard/affiliate', 'affiliate')->name('admin.leaderboard.affiliate');
        Route::get('/leaderboard/course', 'course')->name('admin.leaderboard.course');
        Route::get('/leaderboard/teacher', 'teacher')->name('admin.leaderboard.teacher');
    });

    Route::controller(CourseController::class)->group(function () {
        Route::get('/course', 'index')->name('admin.course.index');
        Route::get('/course/archive', 'archive')->name('admin.course.archive');
        Route::get('/course/add', 'create')->name('admin.course.add');
        Route::post('/course/add', 'store')->name('admin.course.store');
        Route::get('/course/restore/{course}', 'restore')->name('admin.course.restore');
        Route::get('/course/show/{course}', 'show')->name('admin.course.show');
        Route::get('/course/edit/{course}', 'edit')->name('admin.course.edit');
        Route::post('/course/edit/{course}', 'update')->name('admin.course.update');
        Route::get('/course/delete/{course}', 'destroy')->name('admin.course.delete');
        Route::get('/course/detail/{course}', 'detail')->name('admin.course.detail');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/order', 'index')->name('admin.order.index');
    });

    Route::controller(PaymentController::class)->group(function () {
        Route::get('/payment', 'index')->name('admin.payment.index');
        Route::get('/payment/accept/{payment}', 'accept')->name('admin.payment.accept');
        Route::get('/payment/decline/{payment}', 'decline')->name('admin.payment.decline');
    });

    Route::controller(PaymentMethodController::class)->group(function () {
        Route::get('/payment-method', 'index')->name('admin.payment_method.index');
        Route::get('/payment-method/add', 'create')->name('admin.payment_method.add');
        Route::post('/payment-method/add', 'store')->name('admin.payment_method.store');
        Route::get('/payment-method/edit/{payment_method}', 'edit')->name('admin.payment_method.edit');
        Route::post('/payment-method/edit/{payment_method}', 'update')->name('admin.payment_method.update');
        Route::get('/payment-method/delete/{payment_method}', 'destroy')->name('admin.payment_method.delete');
    });

    Route::controller(YoutubeController::class)->group(function () {
        Route::get('/youtube', 'index')->name('admin.youtube.index');
        Route::get('/youtube/add', 'create')->name('admin.youtube.add');
        Route::post('/youtube/add', 'store')->name('admin.youtube.store');
        Route::get('/youtube/edit/{youtube}', 'edit')->name('admin.youtube.edit');
        Route::post('/youtube/edit/{youtube}', 'update')->name('admin.youtube.update');
        Route::get('/youtube/delete/{youtube}', 'destroy')->name('admin.youtube.delete');
    });

    Route::controller(AdminController::class)->group(function () {
        Route::get('/user', 'user_index')->name('admin.user.index');
        Route::get('/teacher', 'teacher_index')->name('admin.teacher.index');
        Route::get('/user/edit/{user}', 'edit')->name('admin.user.edit');
        Route::post('/user/edit/{user}', 'update')->name('admin.user.update');
        Route::get('/user/delete/{user}', 'destroy')->name('admin.user.delete');
    });

    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'setting')->name('admin.setting.index');
        Route::get('/setting/image', 'image')->name('admin.setting.image');
        Route::post('/setting/{setting}', 'setting_update')->name('admin.setting.update');
        Route::post('/setting/image/{setting}', 'image_update')->name('admin.setting.image.update');
    });

    Route::controller(MailController::class)->group(function () {
        Route::get('/mail', 'index')->name('admin.mail.index');
        Route::get('/mail/user', 'user')->name('admin.mail.user');
        Route::get('/mail/broadcast', 'broadcast')->name('admin.mail.broadcast');
        Route::post('/mail', 'store')->name('admin.mail.store');
        Route::post('/mail/broadcast', 'store_broadcast');
    });

    Route::controller(AffiliateController::class)->group(function () {
        Route::get('/affiliate/all', 'affiliate_all')->name('admin.affiliate.all');
        Route::get('/affiliate', 'index')->name('admin.affiliate.index');
    });

    Route::controller(WalletController::class)->group(function () {
        Route::get('/wallet/all', 'wallet_all')->name('admin.wallet.all');
        Route::get('/wallet', 'index')->name('admin.wallet.index');
        Route::get('/wallet/method', 'method')->name('admin.wallet.method');
        Route::post('/wallet/update/{wallet}', 'update')->name('admin.wallet.update');
        Route::get('/wallet/withdraw', 'withdraw')->name('admin.wallet.withdraw');
        Route::post('/wallet/withdraw', 'withdraw_store')->name('admin.wallet.withdraw.store');
    });

    Route::controller(TestimoniController::class)->group(function () {
        Route::get('/testimoni', 'index')->name('admin.testimoni.index');
        Route::get('/testimoni/add', 'create')->name('admin.testimoni.add');
        Route::post('/testimoni/add', 'store')->name('admin.testimoni.store');
        Route::get('/testimoni/edit/{testimoni}', 'edit')->name('admin.testimoni.edit');
        Route::post('/testimoni/edit/{testimoni}', 'update')->name('admin.testimoni.update');
        Route::get('/testimoni/delete/{testimoni}', 'destroy')->name('admin.testimoni.delete');
    });

    Route::controller(FaqController::class)->group(function () {
        Route::get('/faq', 'index')->name('admin.faq.index');
        Route::get('/faq/add', 'create')->name('admin.faq.add');
        Route::post('/faq/add', 'store')->name('admin.faq.store');
        Route::get('/faq/edit/{faq}', 'edit')->name('admin.faq.edit');
        Route::post('/faq/edit/{faq}', 'update')->name('admin.faq.update');
        Route::get('/faq/delete/{faq}', 'destroy')->name('admin.faq.delete');
    });

    Route::controller(WithdrawController::class)->group(function () {
        Route::get('/withdraw', 'index')->name('admin.withdraw.index');
        Route::get('/withdraw/edit/{wallet_history}', 'edit')->name('admin.withdraw.edit');
        Route::post('/withdraw/edit/{wallet_history}', 'update')->name('admin.withdraw.update');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/contact', 'index')->name('admin.contact.index');
        Route::get('/contact/delete/{contact}', 'destroy')->name('admin.contact.delete');
    });

    Route::controller(ReviewController::class)->group(function () {
        Route::get('/review', 'index')->name('admin.review.index');
    });

});
