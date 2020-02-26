<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class loginController extends Controller
{
    public function getLogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
        $form = ['email' => $request->email, 'password' => $request->password];
        if($request->remember = 'Remember Me'){
            $remember = true;
        }else{
            $remember = false;
        }
        if(Auth::attempt($form)){
            return redirect('admin');
        }else{
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng.');
        }
    }
}
