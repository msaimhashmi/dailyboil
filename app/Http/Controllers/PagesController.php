<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generalsettings;
use App\Languages;
use App\Source;
use App\Pages;

class PagesController extends Controller
{
    public function index($id)
    {
        $ids = 'en.json';
        $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
        $json = json_decode(file_get_contents($path), true); 

        $title = 'Supported Sources';
        $count_source = Source::get()->count();
        $headerPages = Pages::get();
        $sources = Source::get();
        $languages = Languages::get();
        $Generalsettings = Generalsettings::find('1');
    	$page = Pages::find($id);

    	return view('pages')
        ->with('Generalsettings',$Generalsettings)
        ->with('sources',$sources)
        ->with('json',$json)
        ->with('title',$title)
        ->with('languages',$languages)
        ->with('headerPages',$headerPages)
        ->with('count_source',$count_source)
    	->with('page',$page);	
    }
}
