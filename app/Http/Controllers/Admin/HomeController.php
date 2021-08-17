<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\Admin\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\CaptchaSettings;

class HomeController extends Controller
{
    

    public function loginform()
    {
        $captcha = CaptchaSettings::find('1');
        return view('admin.login')
        ->with('captcha',$captcha);
    }
    
    // Login
    public function login(Request $request)
    {
        $captcha = CaptchaSettings::find('1');

        if($captcha->loginCaptcha == '1'){
            request()->validate(['g-recaptcha-response' => 'required|captcha']);
        }


        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials))
        {
            return redirect()->intended('/admin/dashboard');
        }
        
        return redirect()->back()->withErrors(['invalid' => 'Invalid Login Credentials !!']);         
    }

        // login End
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/admin');
    }

    public function register_form()
    {
        return view('admin/signup');
    }
    
    public function signup(Request $request)
    {
        $request->validate([
            'password' => ['required'],
            'confirm_password' => ['same:password'],
        ]);

      User::create([
        'username' =>  request()->get('username'),
        'email' =>  request()->get('email'),
        'password'=> Hash::make($request->password),
        // 'password' => Hash::make(request()->get('password'))
      ]);

      return redirect()->to('/admin')->with('message', 'Signup Is Success  Please Sign In!');
    }

    public function change_password()
    {
        return view('admin.change-password');
    }

}
