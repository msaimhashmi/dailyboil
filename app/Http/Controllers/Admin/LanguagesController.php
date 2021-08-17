<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Languages;
use App\Languagesvalue;
use DB;
use App\Quotation;
use Storage;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
    	$languages = Languages::get();
    	return view('admin.languages')
    	->with('languages',$languages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-language');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error = false;
        if(isset($_POST['submit'])) {
            $name = request()->get('name');
            if(empty($name)){
                return redirect()->back()->withErrors(['nameError' => 'Name should not be empty']);
            }
            $code = request()->get('code');
            if(empty($code)){
                return redirect()->back()->withErrors(['codeError' => 'Code should not be empty']);
            }

            $lang = Languages::create([
                'name' => request()->get('name'),
                'code' => request()->get('code'),
                'flag' => request()->get('flag'),
                'slug' => request()->get('slug'),
                'status' => request()->get('status'),
            ]);

            return redirect()->to('admin/languages');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $language = Languages::find($id);
        return view('admin.languages_value')
        ->with('language',$language);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lang = Languages::find($id);
        return view('admin.edit-language')
        ->with('lang',$lang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $language = Languages::find($id);

        $language->update([
            'name' => request()->get('name'),
            'code' => request()->get('code'),
            'flag' => request()->get('flag'),
            'status' => request()->get('status'),
        ]);

        return redirect()->to('admin/languages');
    }

    public function update_values(Request $request, $id)
    {   
        try {
            $language = Languages::find($id);
            $idd = $language->code;
            $ids= $idd.'.json';
            // my data storage location is project_root/storage/app/data.json file.
            $contactInfo = Storage::disk('local')->exists(!$ids) ? json_decode(Storage::disk('local')->get($ids)) : [];
        
            $inputData = $request->all();
           
            $inputData['datetime_submitted'] = date('Y-m-d H:i:s');
 
            array_push($contactInfo,$inputData);
    
            Storage::disk('local')->put($ids, json_encode($contactInfo),200);
 
        } 
        catch(Exception $e) 
        {
            return ['error' => true, 'message' => $e->getMessage()];
        }

        $langvalue = Languages::find($id);
        $langvalue->update([
            'home' => request()->get('home'),
            'title' => request()->get('title'),
            'search_bar_placeholder' => request()->get('search_bar_placeholder'),
            'get_in_touch_with_us' => request()->get('get_in_touch_with_us'),
            'source' => request()->get('source'),
            'share_on_facebook' => request()->get('share_on_facebook'),
            'share_on_twitter' => request()->get('share_on_twitter'),
            'share_on_googleplus' => request()->get('share_on_googleplus'),
            'share_on_vk' => request()->get('share_on_vk'),
            'share_on_whatsapp' => request()->get('share_on_whatsapp'),
            'video' => request()->get('video'),
            'video_only' => request()->get('video_only'),
            'more' => request()->get('more'),
            'less' => request()->get('less'),
            'audio' => request()->get('audio'),
            'gif' => request()->get('gif'),
            'quality' => request()->get('quality'),
            'format' => request()->get('format'),
            'size' => request()->get('size'),
            'downloads' => request()->get('downloads'),
            'source_not_found_error' => request()->get('source_not_found_error'),
            'video_not_found_error' => request()->get('video_not_found_error'),
            'invalid_url_error' => request()->get('invalid_url_error'),
            'stay_in_touch_with_us' => request()->get('stay_in_touch_with_us'),
            'features_heading' => request()->get('features_heading'),
            'multiple_sources_section_heading' => request()->get('multiple_sources_section_heading'),
            'multiple_sources_section_description' => request()->get('multiple_sources_section_description'),
            'multiple_formats_section_heading' => request()->get('multiple_formats_section_heading'),
            'multiple_formats_section_description' => request()->get('multiple_formats_section_description'),
            'supported_sources' => request()->get('supported_sources'),
            'more_coming_soon' => request()->get('more_coming_soon'),
            'copyright' => request()->get('copyright'),
            'all_rights_reserved' => request()->get('all_rights_reserved'),
            'contact_us' => request()->get('contact_us'),
            'contact_page_heading' => request()->get('contact_page_heading'),
            'enter_your_name' => request()->get('enter_your_name'),
            'enter_your_email' => request()->get('enter_your_email'),
            'enter_subject' => request()->get('enter_subject'),
            'enter_your_message' => request()->get('enter_your_message'),
            'send' => request()->get('send'),
            'name_error' => request()->get('name_error'),
            'email_error' => request()->get('email_error'),
            'subject_error' => request()->get('subject_error'),
            'message_error' => request()->get('message_error'),
            'captcha_error' => request()->get('captcha_error'),
            'page_not_found' => request()->get('page_not_found'),
            'you_seem_to_be_trying_to_find_this_way_home' => request()->get('you_seem_to_be_trying_to_find_this_way_home'),
            'back_to_home' => request()->get('back_to_home'),
            'here' => request()->get('here'),
            'dailymotion_download_guide_heading' => request()->get('dailymotion_download_guide_heading'),
            'dailymotion_download_guide_step_1' => request()->get('dailymotion_download_guide_step_1'),
            'dailymotion_download_guide_step_2' => request()->get('dailymotion_download_guide_step_2'),
            'dailymotion_download_guide_step_3' => request()->get('dailymotion_download_guide_step_3'),
            'dailymotion_download_guide_step_4' => request()->get('dailymotion_download_guide_step_4'),
            'dailymotion_download_guide_step_5' => request()->get('dailymotion_download_guide_step_5'),
            'paste_source_code_here' => request()->get('paste_source_code_here'),
            'generate_link' => request()->get('generate_link'),
            'close' => request()->get('close'),
        ]);

        return redirect()->to('admin/languages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = Languages::find($id);
        $language->delete();
        return redirect()->back();
    }
}
