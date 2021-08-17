<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected $table = 'languages';
    protected $fillable = ['name','code','flag','status','home','title','search_bar_placeholder','get_in_touch_with_us','source','share_on_facebook','share_on_twitter','share_on_googleplus','share_on_vk','share_on_whatsapp','video','video_only','more','less','audio','gif','quality','format','size','downloads','source_not_found_error','video_not_found_error','invalid_url_error','stay_in_touch_with_us','features_heading','multiple_sources_section_heading','multiple_sources_section_description','multiple_formats_section_heading','multiple_formats_section_description','supported_sources','more_coming_soon','copyright','all_rights_reserved','contact_us','contact_page_heading','enter_your_name','enter_your_email','enter_subject','enter_your_message','send','name_error','email_error','subject_error','message_error','captcha_error','page_not_found','you_seem_to_be_trying_to_find_this_way_home','back_to_home','here','dailymotion_download_guide_heading','dailymotion_download_guide_step_1','dailymotion_download_guide_step_2','dailymotion_download_guide_step_3','dailymotion_download_guide_step_4','dailymotion_download_guide_step_5','paste_source_code_here','generate_link','close'];
}
