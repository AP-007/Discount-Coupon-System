<?php

use Illuminate\Support\Facades\Route;

Route::get('redirects', [App\Http\Controllers\HomeController::class, 'index']);
