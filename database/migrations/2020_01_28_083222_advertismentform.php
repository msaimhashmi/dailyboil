<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Advertismentform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertiseform', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('first_name')->nullable();
            $table->bigInteger('last_name')->nullable();
            $table->bigInteger('email')->nullable();
            $table->bigInteger('phone_no')->nullable();
            $table->bigInteger('company_name')->nullable();
            $table->bigInteger('company_website')->nullable();
            $table->bigInteger('image')->nullable();
            $table->bigInteger('120X600')->nullable();
            $table->bigInteger('160X600')->nullable();
            $table->bigInteger('200X200')->nullable();
            $table->bigInteger('250X250')->nullable();
            $table->bigInteger('300X250')->nullable();
            $table->bigInteger('336X280')->nullable();
            $table->bigInteger('450X50')->nullable();
            $table->bigInteger('468X60')->nullable();
            $table->bigInteger('480X70')->nullable();
            $table->bigInteger('728X90')->nullable();
            $table->bigInteger('information')->nullable();
            $table->bigInteger('media_channel')->nullable();
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
        Schema::dropIfExists('advertiseform');
    }
}
