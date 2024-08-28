<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function Check_login(Request $request)
    {
        $rules=[
            'email' => 'required|exists:users',
            'password' => 'required',
        ];

        $messages=[
            'email.required'=>'Chưa nhập email',
            'email.exists'=>'email không đúng',
            'password.required'=>'Chưa nhập mật khẩu',
        ];
        $request->validate($rules,$messages);

        $data = request()->all('email', 'password');
        $check = auth()->attempt($data);
        if ($check) {
            return redirect()->route('category.index')->with('success','register successful');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function Check_register(Request $request)
    {
        $rules=[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ];

        $messages=[
            'name.required'=>'Chưa nhập tên',
            'email.required'=>'Chưa nhập tên email',
            'email.unique'=>'email đã được sử dụng',
            'password.required'=>'Chưa nhập Mật khẩu',
            'confirm_password.required'=>'Nhập lại mật khẩu',
        ];

        $request->validate($rules,$messages);
        $data = request()->all('email', 'name','password','confirm_password');
        $data['password'] = bcrypt(request('password'));
        User::create($data);
        return redirect()->route('admin.login');
    }

}