<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaptchaSettings extends Model
{
    protected $table = 'captcha-settings';
	protected $fillable = ['siteKey','secretKey','loginCaptcha','forgotPasswordCaptcha','contactCaptcha','resetPasswordCaptcha','captchaShowFailedAttempts'];
}
