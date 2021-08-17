<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SocialSharing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social-sharing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status');
            $table->bigInteger('facebookSharing');
            $table->string('facebookPageName', 100);
            $table->bigInteger('googleplusSharing');
            $table->string('googleplusPageId', 100);
            $table->bigInteger('twitterSharing');
            $table->string('twitterTweetText', 100);
            $table->bigInteger('linkedinSharing');
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
        Schema::dropIfExists('social-sharing');
    }
}
