<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CaptchaSettings;

class CaptchaSettingsController extends Controller
{
    public function index()
    {
    	$id = '1';
    	$captcha = CaptchaSettings::find($id);
    	return view('admin.captcha-settings')
    	->with('captcha',$captcha);
    }

    public function update($id)
    {
    	$CaptchaSettings = CaptchaSettings::find($id);

        $CaptchaSettings->update([
            'siteKey' => request()->get('siteKey'),
            'secretKey' => request()->get('secretKey'),
            'loginCaptcha' => request()->get('loginCaptcha'),
            'forgotPasswordCaptcha' => request()->get('forgotPasswordCaptcha'),
            'contactCaptcha' => request()->get('contactCaptcha'),
            'resetPasswordCaptcha' => request()->get('resetPasswordCaptcha'),
            'captchaShowFailedAttempts' => request()->get('captchaShowFailedAttempts'),
        ]);

        return redirect()->to('admin/captcha-settings');
    }
}
