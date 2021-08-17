<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MailSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail-settings', function (Blueprint $table) {            
            $table->bigIncrements('id');
            $table->bigInteger('smtpStatus');
            $table->string('host', 100);
            $table->bigInteger('port');
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('contactEmail', 100);
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
        Schema::dropIfExists('mail-settings');
    }
}
