<?php
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ListCourseController;
use App\Http\Controllers\SubCourseController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified')->prefix('instructor')->group(function() {
    Route::controller(CourseController::class)->group(function () {
        Route::get('/course', 'teacher_index')->name('teacher.course.index');
        Route::get('/course/add', 'teacher_create')->name('teacher.course.add');
        Route::post('/course/add', 'teacher_store')->name('teacher.course.store');
        Route::get('/course/show/{course:course_slug}', 'teacher_show')->name('teacher.course.show');
        Route::get('/course/edit/{course:course_slug}', 'teacher_edit')->name('teacher.course.edit');
        Route::post('/course/edit/{course:course_slug}', 'teacher_update')->name('teacher.course.update');
        Route::get('/course/delete/{course:course_slug}', 'teacher_destroy')->name('teacher.course.delete');
    });

    Route::controller(SubCourseController::class)->group(function () {
        Route::get('/sub-course/add/{course:course_slug}', 'teacher_create')->name('teacher.sub_course.add');
        Route::post('/sub-course/add/{course:course_slug}', 'teacher_store')->name('teacher.sub_course.store');
        Route::get('/sub-course/edit/{subcourse:sub_course_slug}', 'teacher_edit')->name('teacher.sub_course.edit');
        Route::post('/sub-course/edit/{subcourse:sub_course_slug}', 'teacher_update')->name('teacher.sub_course.update');
        Route::get('/sub-course/delete/{subcourse:sub_course_slug}', 'teacher_destroy')->name('teacher.sub_course.delete');
    });

    Route::controller(ListCourseController::class)->group(function () {
        Route::get('/list-course/add/{course:course_slug}', 'teacher_create')->name('teacher.list_course.add');
        Route::post('/list-course/add/{course:course_slug}', 'teacher_store')->name('teacher.list_course.store');
        Route::get('/list-course/edit/{listcourse:list_course_slug}', 'teacher_edit')->name('teacher.list_course.edit');
        Route::post('/list-course/edit/{listcourse:list_course_slug}', 'teacher_update')->name('teacher.list_course.update');
        Route::get('/list-course/delete/{listcourse:list_course_slug}', 'teacher_destroy')->name('teacher.list_course.delete');
    });

    Route::controller(WalletController::class)->group(function () {
        Route::get('/wallet', 'teacher_index')->name('teacher.wallet.index');
        Route::get('/wallet/method', 'teacher_method')->name('teacher.wallet.method');
        Route::post('/wallet/update/{wallet}', 'teacher_update')->name('teacher.wallet.update');
        Route::get('/wallet/withdraw', 'teacher_withdraw')->name('teacher.wallet.withdraw');
        Route::post('/wallet/withdraw', 'teacher_withdraw_store')->name('teacher.wallet.withdraw.store');
    });

    Route::controller(AffiliateController::class)->group(function () {
        Route::get('/affiliate', 'teacher_index')->name('teacher.affiliate.index');
    });
});
