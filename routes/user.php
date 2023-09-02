<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'user',
    'as' => 'user.'
], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'user'])->name('dashboard');
    Route::get('coupon/{id}/customer', [App\Http\Controllers\CustomerController::class,'create'])->name('coupons.customers.create');
    // Route::view('user/dashboard', 'user.dashboard')->name('user.dashboard');
    Route::get('/coupons', [App\Http\Controllers\user\CouponController::class,'view'])->name('coupon');
});