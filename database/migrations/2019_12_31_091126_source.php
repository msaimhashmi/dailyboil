<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Source extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200)->nullable();
            $table->string('website',200)->nullable();
            $table->string('link_cache_time',200)->nullable();
            $table->string('icon',200)->nullable();
            $table->string('status',200)->nullable();
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
        Schema::dropIfExists('source');
    }
}
