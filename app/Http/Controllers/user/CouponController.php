<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function view(){
        return view('user.coupon.index');
    }
}
