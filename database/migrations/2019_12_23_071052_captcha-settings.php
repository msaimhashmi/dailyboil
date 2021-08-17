<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CaptchaSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('captcha-settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('siteKey', 300);
            $table->string('secretKey', 300);
            $table->bigInteger('loginCaptcha');
            $table->bigInteger('forgotPasswordCaptcha');
            $table->bigInteger('contactCaptcha');
            $table->bigInteger('resetPasswordCaptcha');
            $table->bigInteger('captchaShowFailedAttempts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('captcha-settings');
    }
}
