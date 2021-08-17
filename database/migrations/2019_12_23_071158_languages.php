<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Languages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('code', 10);
            $table->string('flag', 10);
            $table->bigInteger('status');
            $table->string('home',200)->nullable();
            $table->string('title',200)->nullable();
            $table->string('search_bar_placeholder',200)->nullable();
            $table->string('get_in_touch_with_us',200)->nullable();
            $table->string('source',200)->nullable();
            $table->string('share_on_facebook',200)->nullable();
            $table->string('share_on_twitter',200)->nullable();
            $table->string('share_on_googleplus',200)->nullable();
            $table->string('share_on_vk',200)->nullable();
            $table->string('share_on_whatsapp',200)->nullable();
            $table->string('video',200)->nullable();
            $table->string('video_only',200)->nullable();
            $table->string('more',200)->nullable();
            $table->string('less',200)->nullable();
            $table->string('audio',200)->nullable();
            $table->string('gif',200)->nullable();
            $table->string('quality',200)->nullable();
            $table->string('format',200)->nullable();
            $table->string('size',200)->nullable();
            $table->string('downloads',200)->nullable();
            $table->string('source_not_found_error',200)->nullable();
            $table->string('video_not_found_error',200)->nullable();
            $table->string('invalid_url_error',200)->nullable();
            $table->string('stay_in_touch_with_us',200)->nullable();
            $table->string('features_heading',200)->nullable();
            $table->string('multiple_sources_section_heading',200)->nullable();
            $table->string('multiple_sources_section_description',200)->nullable();
            $table->string('multiple_formats_section_heading',200)->nullable();
            $table->string('multiple_formats_section_description',200)->nullable();
            $table->string('supported_sources',200)->nullable();
            $table->string('more_coming_soon',200)->nullable();
            $table->string('copyright',200)->nullable();
            $table->string('all_rights_reserved',200)->nullable();
            $table->string('contact_us',200)->nullable();
            $table->string('contact_page_heading',200)->nullable();
            $table->string('enter_your_enter_your_name',200)->nullable();
            $table->string('enter_your_email',200)->nullable();
            $table->string('enter_subject',200)->nullable();
            $table->string('enter_your_message',200)->nullable();
            $table->string('send',200)->nullable();
            $table->string('name_error',200)->nullable();
            $table->string('email_error',200)->nullable();
            $table->string('subject_error',200)->nullable();
            $table->string('message_error',200)->nullable();
            $table->string('captcha_error',200)->nullable();
            $table->string('page_not_found',200)->nullable();
            $table->string('you_seem_to_be_trying_to_find_this_way_home',200)->nullable();
            $table->string('back_to_home',200)->nullable();
            $table->string('here',200)->nullable();
            $table->string('dailymotion_download_guide_heading',200)->nullable();
            $table->string('dailymotion_download_guide_step_1',200)->nullable();
            $table->string('dailymotion_download_guide_step_2',200)->nullable();
            $table->string('dailymotion_download_guide_step_3',200)->nullable();
            $table->string('dailymotion_download_guide_step_4',200)->nullable();
            $table->string('dailymotion_download_guide_step_5',200)->nullable();
            $table->string('paste_source_code_here',200)->nullable();
            $table->string('generate_link',200)->nullable();
            $table->string('close',200)->nullable();
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
        Schema::dropIfExists('languages');
    }
}
