<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if($role=='1'){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('user.coupon');
        }
    }
}
