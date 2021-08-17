<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdsSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads-settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ad728x90Status');
            $table->bigInteger('ad728x90ResponsiveStatus');
            $table->longText('ad728x90');
            $table->bigInteger('ad250x250Status');
            $table->bigInteger('ad250x250ResponsiveStatu');
            $table->text('ad250x250');
            $table->bigInteger('popAdStatus');
            $table->text('popAd');
            $table->bigInteger('popAdFrequency');
            $table->bigInteger('displayOnHomePage');
            $table->bigInteger('displayOnDynamicPages');
            $table->bigInteger('displayOnContactPage');
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
        Schema::dropIfExists('ads-settings');
    }
}
