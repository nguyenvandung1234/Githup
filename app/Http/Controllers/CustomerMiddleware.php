<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware extends Controller
{
    //
    public function handle($request,Closure $closure){
        //kiểm tra nếu chưa đăng nhập
        if(! Auth::guard('cus')->check()){
            //chuyển hướng về form đăng nhập
            return redirect()->route('customer.login');
        }
    }
}
