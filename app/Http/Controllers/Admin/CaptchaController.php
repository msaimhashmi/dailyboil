<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\User;

class CaptchaController extends Controller
{
    public function captchaForm()
    {
       return view('admin.captchaform');
    }  
    public function storeCaptchaForm(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'email' => 'required',
        'mobile_number' => 'required',
        'g-recaptcha-response' => 'required|captcha',
        ]);
 
        dd('successfully validate');
    }
}
