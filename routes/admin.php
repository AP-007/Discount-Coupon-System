<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'is_admin'],
    'as' => 'admin.'
],function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'admin'])->name('dashboard');

    Route::resource('/coupons', App\Http\Controllers\admin\CouponController::class);
    Route::resource('/hotels', App\Http\Controllers\admin\HotelController::class);
    Route::resource('/users', App\Http\Controllers\admin\UserController::class);
    Route::get('coupon/customer/view', [App\Http\Controllers\CustomerController::class,'view'])->name('customers.view');

});