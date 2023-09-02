<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create($id){
        return view('customers.create',compact('id'));
    }

    public function view(){
        return view('customers.view');
    }
    
}
