<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GeneralSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general-settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('description', 200);
            $table->string('keywords', 300);
            $table->string('coverImage', 60);
            $table->string('backgroundImage', 60);
            $table->string('logo', 60);
            $table->string('logoLight', 60);
            $table->string('favicon', 60);
            $table->bigInteger('allowDirectLink');
            $table->bigInteger('https');
            $table->bigInteger('www');
            $table->string('version', 10);
            $table->bigInteger('installed');
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
        Schema::dropIfExists('general-settings');
    }
}
