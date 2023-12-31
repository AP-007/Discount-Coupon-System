<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct() {
        $this->middleware(function ($request, $next) {
            if (session('success')) {
                Alert::success('Success!', session('success'));
            } else if (session('error')) {
                Alert::error('Error!', session('error'));
            }
            return $next($request);
        });
    }
}
