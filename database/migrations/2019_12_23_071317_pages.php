<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100)->nullable();
            $table->string('permalink', 100)->nullable();
            $table->string('description', 200)->nullable();
            $table->string('keywords', 200)->nullable();
            $table->text('content')->nullable();
            $table->bigInteger('position')->nullable();
            $table->bigInteger('status')->nullable();
            $table->bigInteger('displayOrder')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
