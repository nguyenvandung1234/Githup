<?php

namespace App\Http\Controllers;

use App\Mail\FogotPassword;
use App\Mail\VerifyAccount;
use App\Models\Customer;
use App\Models\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class AccoutController extends Controller
{

    //hiển thị trang đăng nhập
    public function login(){
        return view('account.login');
    }


    //thoát web
    public function logout(){
        auth('cus')->logout();
        return redirect()->route('account.login')->with('success','You logouted');
    }


    //kiểm tra đăng nhập
    public function Check_login(Request $request){
        $request->validate([
            'email'=>'required|exists:customers',
            'password'=>'required'
        ],[
            'email.required'=>'Chưa nhập email',
            'email.exists'=>'Email không tồn tại',
            'password.required'=>'Chưa nhập mật khẩu',
            
        ]);

        $data = $request->only('email','password');
        $check = auth('cus')->attempt($data);
        if($check){
            if(auth('cus')->user()->email_verified_at == ''){
                auth('cus')->logout();
                return redirect()->back()->with('no','You acccount is not verify, please check email again');
            }
            return redirect()->route('home')->with('success','đăng nhập thành công');
        }else{
            return redirect()->back()->with('no','Your acccount or password invalid');
        }
    }


    //hiển thị trang đăng ký
    public function register(){
        return view('account.register');
    }


    //kiểm tra trang đăng ký
    public function Check_register(Request $request){

        $request->validate([
            'name'=>'required|min:6|max:50',
            'email'=>'required|email|unique:customers',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required|min:4',
            'confirm_password'=>'required|same:password',
        ],[
            'name.required'=>'Chưa nhập tên',
            'name.min'=>'Tên phải trên 6 ký tự',
            'name.max'=>'Tên không được vượt quá 50 ký tự',
            'email.required'=>'Chưa nhập email',
            'email.unique'=>'Email đã được sử dụng',
            'phone.required'=>'Chưa nhập số điện thoại',
            'address.required'=>'Chưa nhập địa chỉ',
            'password.required'=>'Chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhật phải 4 ký tự',
            'confirm_password.required'=>'Nhập lại mật khẩu',
            'confirm_password.same'=>'Không đúng mật khẩu',
        ]);

        $data = $request->only('name','email','phone','address','gender');
        $data['password'] = bcrypt($request->password);
        
        if($acc = Customer::create($data)){
            Mail::to($acc->email)->send(new VerifyAccount($acc));
           return redirect()->route('account.login')->with('succes','sign up success');
        }
        return redirect()->back()->with('no','something error');
        

    }



    //verify email
    public function verify($email){
        $acc = Customer::where('email', $email)->whereNull('email_verified_at')->firstOrFail();
        Customer::where('email', $email)->update(['email_verified_at'=>date('Y-m-d')]);
        return redirect()->route('account.login')->with('succes','verify successfully');
    }


    //hiển thị thông tin tài khoản cá nhân
    public function profile(){
        $auth = auth('cus')->user();
        return view('account.profile',compact('auth'));
    }


    //kiểm tra thông tin tài khoản cá nhân
    public function Check_profile(Request $request){

        $auth = auth('cus')->user();

        $request->validate([
            'name'=>'required|min:6|max:50',
            'email'=>'required|email|unique:customers,email,'.$auth->id,
            'phone'=>'required',
            'address'=>'required',
            'password'=>['required',function($attr,$value,$fail) use($auth){
                if(Hash::check($value, $auth->password)){
                    return $fail('your password is not match');
                }
            }],
        ],[
            'name.required'=>'Chưa nhập tên',
            'name.min'=>'Tên phải trên 6 ký tự',
            'name.max'=>'Tên không được vượt quá 50 ký tự',
            'email.required'=>'Chưa nhập email',
            'email.unique'=>'Email đã được sử dụng',
            'phone.required'=>'Chưa nhập số điện thoại',
            'address.required'=>'Chưa nhập địa chỉ',
            'password.required'=>'Chưa nhập mật khẩu',
        ]);


        $data = $request->only('name','email','phone','address','gender');
        $check = Customer::where('email',$auth->email)->update($data);

        if($check){
            return redirect()->back()->with('success','Update your profile successfully');
        }

        return redirect()->back()->with('no','something error, please check again');
        

    }


    //thay đổi mật khẩu
    public function change_password(){
        return view('account.change_password');
    }


    //kiểm tra thay đổi mật khẩu
    public function Check_change_password(Request $request){
        $auth = auth('cus')->user();
        $request->validate([
            'old_password'=> 'required',
            'new_password'=>'required|min:4',
            'confirm_password'=>'required|same:new_password',
        ],[
            'old_password.required'=>'chưa nhập mật khẩu',
            'new_password.required'=>'Nhập mật khẩu mới',
            'new_password.min'=>'Nhập mật ít nhất 4 ký tự',
            'confirm_password.required'=>'Nhập lại mật khẩu',
            'confirm_password.same'=>'Mật khâu không đúng',
        ]);


        $check = !Hash::check($request->old_password,auth('cus')->user()->password);
        if($check){
            return redirect()->back()->with('no','old password does not match');
        }

        Customer::whereId(auth('cus')->user()->id)->update([
            'password'=> Hash::make($request->new_password)
        ]);
             return redirect()->route('account.login')->with('success','Update your password successfully');


        // $data['new_password'] = bcrypt($request->password);
        // $check = $auth->update($data);
        // if($check){
        //     auth('cus')->logout();
        //     return redirect()->route('account.login')->with('success','Update your password successfully');
        // }else{
        // return redirect()->back()->with('no','something error, please check again');
        // }


    }


    //quên mật khẩu
    public function forgot_pasword(){
        return view('account.forgot_password');
    }


    //kiểm tra ki quên mật khẩu
    public function Check_forgot_pasword(Request $request){
        $request->validate([
            'email'=>'required|exists:customers',
        ],[
            'email.required'=>'Chưa nhập email',
            'email.exists'=>'Email không tồn tại',            
        ]);

        $customer = Customer::where('email',$request->email)->first();

        $token = \Str::random(50);

        $tokenData = [
            'email'=>$request->email,
            'token'=>$token,
        ];

        if(ResetPassword::create($tokenData)){
            Mail::to($request->email)->send(new FogotPassword($customer,$token));
            return redirect()->back()->with('success','Send mail successful please check again email');
        }
        return redirect()->back()->with('no','something error, please check again');


    }


    //reset mật khẩu
    public function reset_password($token){
        $tokenData = ResetPassword::checkToken($token);
        $customer = $tokenData->customer;
            return view('account.reset_password');
    }

    public function Check_reset_password($token){
        request()->validate([
            'password'=>'required|min:4',
            'confirm_password'=>'required|same:password',
        ]);
        $tokenData = ResetPassword::checkToken($token);
        $customer = $tokenData->customer;

        $data =[
            'password' => bcrypt(request(('password')))
        ];

        $check = $customer->update($data);

        if($check){
            return redirect()->route('account.login')->with('success','Update your password successfully');
        }
        return redirect()->back()->with('no','something error, please check again');


        

    }
    

    
}