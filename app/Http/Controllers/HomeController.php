<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Generalsettings;
use App\Source;
use App\Pages;
use App\CaptchaSettings;
use App\Languages;
use App\ContactForm;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index_lang($id)
    {
        $url = request()->get('url');
        $ids= $id.'.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        
        $id = '1';
        $title = 'Supported Sources';
        $count_source = Source::get()->count();
        $headerPages = Pages::get();
        $sources = Source::get();
        $languages = Languages::get();
        $Generalsettings = Generalsettings::find($id);;
        return view('welcome')
        ->with('Generalsettings',$Generalsettings)
        ->with('sources',$sources)
        ->with('title',$title)
        ->with('json',$json)
        ->with('url',$url)
        ->with('headerPages',$headerPages)
        ->with('languages',$languages)
        ->with('count_source',$count_source);
    }
    public function index()
    {
        
        $ids = 'en.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        
        $id = '1';
        $title = 'Supported Sources';
        $count_source = Source::get()->count();
        $headerPages = Pages::get();
        $sources = Source::get();
        $languages = Languages::get();
        $Generalsettings = Generalsettings::find($id);;
        return view('welcome')
        ->with('Generalsettings',$Generalsettings)
        ->with('sources',$sources)
        ->with('title',$title)
        ->with('json',$json)
        ->with('headerPages',$headerPages)
        ->with('languages',$languages)
        ->with('count_source',$count_source);
    }

    public function contact()
    {
        $captcha = CaptchaSettings::find('1');
        $ids = 'en.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        $pgname = 'Contact Us';
        $id = '1';
        $languages = Languages::get();
        $headerPages = Pages::get();
        $Generalsettings = Generalsettings::find($id);
        return view('contact')
        ->with('captcha',$captcha)
        ->with('json',$json)
        ->with('headerPages',$headerPages)
        ->with('languages',$languages)
        ->with('Generalsettings',$Generalsettings)
        ->with('pgname',$pgname);
    }

    public function contact_lang($id)
    {
        $ids= $id.'.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        
        $id = '1';
        $title = 'Supported Sources';
        $count_source = Source::get()->count();
        $headerPages = Pages::get();
        $sources = Source::get();
        $captcha = CaptchaSettings::find('1');
        $languages = Languages::get();
        $Generalsettings = Generalsettings::find($id);;
        return view('contact')
        ->with('Generalsettings',$Generalsettings)
        ->with('sources',$sources)
        ->with('title',$title)
        ->with('captcha',$captcha)
        ->with('json',$json)
        ->with('headerPages',$headerPages)
        ->with('languages',$languages)
        ->with('count_source',$count_source);
    }


    public function select_language($id) 
    {
        $ids = $id.'.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        
        $id = '1';
        $title = 'Supported Sources';
        $count_source = Source::get()->count();
        $headerPages = Pages::get();
        $sources = Source::get();
        $languages = Languages::get();
        $Generalsettings = Generalsettings::find($id);


        return view('welcome')
        ->with('json',$json)
        ->with('Generalsettings',$Generalsettings)
        ->with('sources',$sources)
        ->with('title',$title)
        ->with('headerPages',$headerPages)
        ->with('languages',$languages)
        ->with('count_source',$count_source);
    }

    public function about()
    {
        $ids = 'en.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        
        $id = '1';
        $title = 'Supported Sources';
        $count_source = Source::get()->count();
        $headerPages = Pages::get();
        $sources = Source::get();
        $languages = Languages::get();
        $Generalsettings = Generalsettings::find($id);


        return view('about')
        ->with('json',$json)
        ->with('Generalsettings',$Generalsettings)
        ->with('sources',$sources)
        ->with('title',$title)
        ->with('headerPages',$headerPages)
        ->with('languages',$languages)
        ->with('count_source',$count_source);
    }

    public function privacy_policy()
    {
        $ids = 'en.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        
        $id = '1';
        $title = 'Supported Sources';
        $count_source = Source::get()->count();
        $headerPages = Pages::get();
        $sources = Source::get();
        $languages = Languages::get();
        $Generalsettings = Generalsettings::find($id);


        return view('privacy_policy')
        ->with('json',$json)
        ->with('Generalsettings',$Generalsettings)
        ->with('sources',$sources)
        ->with('title',$title)
        ->with('headerPages',$headerPages)
        ->with('languages',$languages)
        ->with('count_source',$count_source);
    }

    public function contactform()
    {
        $data = request()->all();

        ContactForm::create($data);
        $name = $data;
        Mail::to('saaddigitalop@gmail.com')->send(new SendMailable($name));
        return redirect()->to('/contact');
    }

    public function advertise()
    {
        $ids = 'en.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 
        
        $id = '1';
        $title = 'Supported Sources';
        $count_source = Source::get()->count();
        $headerPages = Pages::get();
        $sources = Source::get();
        $languages = Languages::get();
        $Generalsettings = Generalsettings::find($id);

        return view('advertise')
        ->with('json',$json)
        ->with('Generalsettings',$Generalsettings)
        ->with('sources',$sources)
        ->with('title',$title)
        ->with('headerPages',$headerPages)
        ->with('languages',$languages)
        ->with('count_source',$count_source);
    }

    public function advertiseform()
    {
        $data = request()->all();
        print_r($data);
    }
}
