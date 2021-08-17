<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Generalsettings;
use App\Source;
use App\Pages;
use App\CaptchaSettings;
use App\Languages;
use YouTube\YouTubeDownloader;

class ApiController extends Controller
{
    public function index()
    {
        $handlerVimeo = new Vimeo();
        $handlerlink = new LinkHandler();
        $handlerlsc = new Soundclouds();
        
        // form post url
        $url = request()->get('url');

        if (preg_match('/soundcloud/', $url)) {
            $client_id='22e8f71d7ca75e156d6b2f0e0a5172b3';
            
            $url_api='https://api.soundcloud.com/resolve.json?url='.$url.'&client_id=22e8f71d7ca75e156d6b2f0e0a5172b3';
            $jsons = file_get_contents($url_api);
            $obj=json_decode($jsons);

            if ($obj == true) 
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
                return view('video.soundcloud')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('handlerlsc',$handlerlsc)
                ->with('obj',$obj)
                ->with('headerPages',$headerPages)
                ->with('url',$url)
                ->with('client_id',$client_id)
                ->with('json',$json)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
            else
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $message = 'Video Not Found.. 😞';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.message')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('message',$message)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
        }

        // Instagram
        if (preg_match('/instagram/', $url)) 
        {
            $link = substr($url,-16);
            if ($link == 'ig_web_copy_link') 
            {
                $instastart = 'https://www.instagram.com/p/';
                $instaend = substr($url, 28,11);
                $instagram_url = $instastart . $instaend;
                $source = file_get_contents($instagram_url);
                preg_match('/<script type="text\/javascript">window\._sharedData =([^;]+);<\/script>/', $source, $matches);
                $data = json_decode($matches[1],true);

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
                return view('video.instagram')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('headerPages',$headerPages)
                ->with('url',$url)
                ->with('data',$data)
                ->with('json',$json)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
            else
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $message = 'Error fetching information. Perhaps the post is private... 😞';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.message')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('message',$message)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
        }

        // Youtube
        if(preg_match('/youtube/', $url))
        {
            $yt = new YouTubeDownloader();

            $links = $yt->getDownloadLinks($url);

            $youtube = "http://www.youtube.com/oembed?url=" . $url. "&format=json";
            $curl = curl_init($youtube);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $return = curl_exec($curl);
            curl_close($curl);
            $jsonData = json_decode($return, true);
            if ($jsonData == true) 
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
                return view('video.youtube')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('url',$url)
                ->with('links',$links)
                ->with('jsonData',$jsonData)
                ->with('json',$json)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);    
            }
            else
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $message = 'Video Not Found.. 😞';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.message')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('message',$message)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
        }

        $ytid = substr($url,-11);
        $yoututbemb = 'https://www.youtube.com/watch?v='.$ytid;
        
        if(preg_match('/youtube/', $yoututbemb))
        {
            $yt = new YouTubeDownloader();
            
            $links = $yt->getDownloadLinks($yoututbemb);

            $youtube = "http://www.youtube.com/oembed?url=" . $yoututbemb. "&format=json";
            $curl = curl_init($youtube);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $return = curl_exec($curl);
            curl_close($curl);
            $jsonData = json_decode($return, true);
            if ($jsonData == true) 
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
                return view('video.youtube')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('url',$url)
                ->with('links',$links)
                ->with('jsonData',$jsonData)
                ->with('json',$json)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);    
            }
        }

        // Vimeo
        if(preg_match('/vimeo/', $url))
        {
            $oembed_endpoint = 'http://vimeo.com/api/oembed';    
            $video_url = ($url) ? $url : '';    
            $json_url = $oembed_endpoint . '.json?url=' . rawurlencode($video_url) . '&width=640';
            $xml_url = $oembed_endpoint . '.xml?url=' . rawurlencode($video_url) . '&width=640';

            function curl_get($url) 
            {
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_TIMEOUT, 30);
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
                $return = curl_exec($curl);
                curl_close($curl);
                return $return;
            }    
            $oembed = simplexml_load_string(curl_get($xml_url));    
            
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
            return view('video.vimeo')
            ->with('Generalsettings',$Generalsettings)
            ->with('sources',$sources)
            ->with('title',$title)
            ->with('oembed',$oembed)
            ->with('url',$url)
            ->with('handlerVimeo',$handlerVimeo)
            ->with('handlerlink',$handlerlink)
            ->with('json',$json)
            ->with('headerPages',$headerPages)
            ->with('languages',$languages)
            ->with('count_source',$count_source);
        }

        // Imgur
        if(preg_match('/imgur/', $url))
        {    
            $imgurid = substr($url, 26);
            # code...
            $client_id = "c51fe7b5405afc1";
            $c_url = curl_init();
            curl_setopt($c_url, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($c_url, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($c_url, CURLOPT_URL,"https://api.imgur.com/3/gallery/".$imgurid);
            curl_setopt($c_url, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
            $result=curl_exec($c_url);
            curl_close($c_url);
            $json_array = json_decode($result, true);
            
            if ($json_array == true) 
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $id = '1';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find($id);;
                return view('video.imgur')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json_array',$json_array)
                ->with('json',$json)
                ->with('url',$url)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
            else
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $message = 'Video Not Found.. 😞';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.message')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('message',$message)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
        }
        // Dailymotion
        if(preg_match('/dailymotion/', $url))
        {
            $dailymotionid = substr($url, 34);//x2676vv <-- id
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL,"https://api.dailymotion.com/video/".$dailymotionid."?fields=id,title,description,url,duration,embed_url,embed_html,media_type,sprite_url,thumbnail_medium_url ");
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $content = curl_exec($ch); 
            curl_close($ch); 
        
            $json_array = json_decode($content, true);

            $ids= 'en.json';
            $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
            $json = json_decode(file_get_contents($path), true); 
            
            $id = '1';
            $title = 'Supported Sources';
            $count_source = Source::get()->count();
            $headerPages = Pages::get();
            $sources = Source::get();
            $languages = Languages::get();
            $Generalsettings = Generalsettings::find($id);
            return view('video.dailymotion')
            ->with('Generalsettings',$Generalsettings)
            ->with('sources',$sources)
            ->with('title',$title)
            ->with('json_array',$json_array)
            ->with('json',$json)
            ->with('url',$url)
            ->with('headerPages',$headerPages)
            ->with('languages',$languages)
            ->with('count_source',$count_source);
        }
        // Facebook
        if(preg_match('/facebook/', $url)){
            $msg = [];
            try {
                $context = [
                    'http' => [
                        'method' => 'GET',
                        'header' => 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.47 Safari/537.36',
                    ],
                ];
                $context = stream_context_create($context);
                $data = file_get_contents($url, false, $context);
                $ytt = new ytt();
                $msg['id'] = $ytt->generateId($url);
                $msg['title'] = $ytt->getTitle($data);

                if ($sdLink = $ytt->getSDLink($data)) {
                    $msg['links']['Download Low Quality'] = $sdLink;
                }

                if ($hdLink = $ytt->getHDLink($data)) {
                    $msg['links']['Download High Quality'] = $hdLink;
                }

            }
            catch (Exception $e) {
                $msg['success'] = false;
                $msg['message'] = $e->getMessage();
            }
            if ($sdLink == true) {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.facebook')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('msg',$msg)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
            else
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $message = 'Video Not Found.. 😞';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.message')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('message',$message)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
        }
        // Twitter

        if (preg_match('/twitter/', $url)) 
        {
            $twitter = new twitter();
            $id = $twitter->find_id($url);
            $twdata = $twitter->tweet_data($id);
            $c_url = curl_init();
            curl_setopt($c_url, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($c_url, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($c_url, CURLOPT_URL,"https://publish.twitter.com/oembed?url=".$url);
            $result=curl_exec($c_url);
            curl_close($c_url);
            $json_array = json_decode($result, true);
            //print_r($twdata);
            //exit;
            if ($twdata == true) 
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.twitter')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('json_array',$json_array)
                ->with('url',$url)
                ->with('twdata',$twdata)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);            
            }
            else
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $message = 'Video Not Found.. 😞';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.message')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('message',$message)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
        }
        // Twitch 
        // https://www.twitch.tv/uwu_station/video/329528773

        if(preg_match('/twitch/', $url))
        {    
            $urlid = substr($url, -9);
            $videosApi = 'https://api.twitch.tv/kraken/videos/'.$urlid;
            $clientId = 'u1rqadouwvpdaaemrf8m3c2s92uiyv';
            $ch = curl_init();

            curl_setopt_array($ch, array(
                CURLOPT_HTTPHEADER => array(
                    'Client-ID: ' . $clientId,
                    'Accept: application/vnd.twitchtv.v5+json'
                ),
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_URL => $videosApi
            ));
            $response = curl_exec($ch);
            curl_close($ch);
            $json_array = json_decode($response, TRUE);
            echo "<pre>";
            print_r($json_array);
            exit;
            
            if ($json_array == true) 
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $id = '1';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find($id);;
                return view('video.twitch')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json_array',$json_array)
                ->with('json',$json)
                ->with('url',$url)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
            else
            {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $message = 'Video Not Found.. 😞';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.message')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('message',$message)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
            }
        } 
        // Linkedin
        if (preg_match('/linkedin/', $url)) {
                $ids= 'en.json';
                $path = storage_path() . '/app/'.$ids; // ie: /var/www/laravel/app/storage/json/filename.json
                $json = json_decode(file_get_contents($path), true); 
                
                $message = 'Under Construction.. 😞';
                $title = 'Supported Sources';
                $count_source = Source::get()->count();
                $headerPages = Pages::get();
                $sources = Source::get();
                $languages = Languages::get();
                $Generalsettings = Generalsettings::find('1');
                return view('video.message')
                ->with('Generalsettings',$Generalsettings)
                ->with('sources',$sources)
                ->with('title',$title)
                ->with('json',$json)
                ->with('url',$url)
                ->with('message',$message)
                ->with('headerPages',$headerPages)
                ->with('languages',$languages)
                ->with('count_source',$count_source);
        }

        if (preg_match('/tiktok/', $url)) 
        {
            $c_url = curl_init();
            curl_setopt($c_url, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($c_url, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($c_url, CURLOPT_URL,"https://www.tiktok.com/oembed?url=".$url);
            $result=curl_exec($c_url);
            curl_close($c_url);
            $json_array = json_decode($result, true);
            print_r($json_array);
        }
    }

    // Videos DOwnload
    public function downloader()
    {
        $downloadURL = $_GET['link'];
        $type = $_GET['type'];
        $title = $_GET['title'];

        $fileName = $title.'.'.$type;
        //exit;
        if(!empty($downloadURL))
        {
            // Define headers
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$fileName");
            header("Content-Transfer-Encoding: binary");

            // Read the file
            readfile($downloadURL);
        }
    }

    public function downloade_souncloud()
    {
        $client_id='22e8f71d7ca75e156d6b2f0e0a5172b3';
        $handlerlsc = new Soundcloud();

        // form post url
        $url = request()->get('url');
        $urlvimeo = substr($url, 18);

        $soundcloudstart = 'https://soundcloud.com/';
        $soundcloudend = substr($url, 23);
        $soundcloud = $soundcloudstart . $soundcloudend;
        if ($url == $soundcloud) {
            $url_api='https://api.soundcloud.com/resolve.json?url='.$url.'&client_id=22e8f71d7ca75e156d6b2f0e0a5172b3';
            $jsons = file_get_contents($url_api);
            $obj=json_decode($jsons);

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
            return view('video.soundcloud')
            ->with('Generalsettings',$Generalsettings)
            ->with('sources',$sources)
            ->with('title',$title)
            ->with('obj',$obj)
            ->with('client_id',$client_id)
            ->with('handlerlsc',$handlerlsc)
            ->with('headerPages',$headerPages)
            ->with('url',$url)
            ->with('json',$json)
            ->with('languages',$languages)
            ->with('count_source',$count_source);
        }
    }
}
class Soundclouds 
{
    function find_trackid($url, $client_id)   //function to fetch track id from url
    {
    }
    function find_dl($trackid, $client_id)   //function to get download link of specified track
    {
    }
    function get_mp3($trackname, $mp3)      //function to download mp3 by appending Songs title as file name.
    {
    }

}

class Soundcloud 
{
    function find_trackid($url, $client_id)   //function to fetch track id from url
    {
        $data      = file_get_contents("https://api.soundcloud.com/resolve.json?url=$url&client_id=$client_id");
        $data      = json_decode($data, true);
        $trackid   = $data['id'];
        $trackname = $data['title'];
        $trackname = trim($trackname);
        echo $trackname = $trackname . ".mp3";
        return array(
            $trackid,
            $trackname
        );
    }
    function find_dl($trackid, $client_id)   //function to get download link of specified track
    {
        $data = file_get_contents("http://api.soundcloud.com/i1/tracks/$trackid/streams?client_id=$client_id");
        $data = json_decode($data, true);
        $mp3  = $data['http_mp3_128_url'];
        return $mp3;
    }
    function get_mp3($trackname, $mp3)      //function to download mp3 by appending Songs title as file name.
    {
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . $trackname . "\"");
        readfile($mp3);
        exit;
    }

}


class Vimeo
{
    /**
     * @var array Vimeo video quality priority
     */
    private $link_array = array();
     
    public function __construct() {
        $this->link_array = array("/^(?:http(?:s)?:\/\/)?(?:www\.)?vimeo\.com\/\d{8}/"=>new VimeoDownloader());
    }
     
    /*
     * Get the url pattern
     * return array
     */
    private function getPattern()
    {
        return array_keys($this->link_array);
    }
     
    /*
     * Get the downloader object if pattern matches else return false
     * @param string
     * return object or bool
     * 
     */
    public function getDownloader($url)
    {
        for($i = 0; $i < count($this->getPattern()); $i++)
        {
            $pattern_st = $this->getPattern()[$i];
            /*
             * check the pattern match with the given video url
             */
            if(preg_match($pattern_st, $url))
            {
                return $this->link_array[$pattern_st];
            }
        }
        return false;
    }


    public function getConfigObjectFromHtml($string, $start, $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) {
            return '';
        }
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
    public function getVimeoVideoInfo($url)
    {
        $videoInfo = null;
        $page = $this->getRemoteContent($url);
        $html = $this->getConfigObjectFromHtml($page, 'clip_page_config = ', 'window.can_preload');
        $json = substr($html, 0, strpos($html, '}};') + 2);
        $videoConfig = json_decode($json);
        if (isset($videoConfig->player->config_url)) {
            $videoObj = json_decode($this->getRemoteContent($videoConfig->player->config_url));
            if (!property_exists($videoObj, 'message')) {
                $videoInfo = $videoObj;
            }
        }
        return $videoInfo;
    }

    public function getRemoteContent($url)
    {
        $data = file_get_contents($url);
        return $data;
    }
}
class LinkHandler {
    public function setUrl($url)
    {
        $this->video_url = $url;
    }
     
    /*
     * store the url pattern and corresponding downloader object
     * @var array
     */
     
    private $link_array = array();
     
    public function __construct() {
        $this->link_array = array("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed)\/))([^\?&\"'>]+)/" => new YouTubeDownloader(),
                                  "/^(?:http(?:s)?:\/\/)?(?:www\.)?vimeo\.com\/\d{8}/"=>new VimeoDownloader()
                                 );
    }
     
    /*
     * Get the url pattern
     * return array
     */
    private function getPattern()
    {
        return array_keys($this->link_array);
    }
     
    /*
     * Get the downloader object if pattern matches else return false
     * @param string
     * return object or bool
     * 
     */
    public function getDownloader($url)
    {
        for($i = 0; $i < count($this->getPattern()); $i++)
        {
            $pattern_st = $this->getPattern()[$i];
            /*
             * check the pattern match with the given video url
             */
            if(preg_match($pattern_st, $url))
            {
                return $this->link_array[$pattern_st];
            }
        }
        return false;
    }
}

class VimeoDownloader {

    protected $video_url;
    public function setUrl($url)
    {
        $this->video_url = $url;
    }
    private function getVideoInfo() {
        return file_get_contents($this->getRequestedUrl());
    }
     
    /*
     * Get video Id
     * @param string
     * return string
     */
     
    private function extractVideoId($video_url)
    {
        $start_position = stripos($video_url, ".com/");
        return ltrim(substr($video_url, $start_position), ".com/");
    }
     
    /*
     * Scrap the url from the page
     * return string
     */
    private function getRequestedUrl()
    {
        $data = file_get_contents("https://www.vimeo.com/".$this->extractVideoId($this->video_url));
        $data = stristr($data, 'config_url":"');
        $start = substr($data, strlen('config_url":"'));
        $stop = stripos($start, ',');
        $str = substr($start, 0, $stop);
        return rtrim(str_replace("\\", "", $str), '"');
    }
     
    /*
     * Get the video download link
     * return array
     */
     
    public function getVideoDownloadLink() {
         
        $decode_to_arr = json_decode($this->getVideoInfo(), true);
        $this->video_title = $decode_to_arr["video"]["title"];
        $link_array = $decode_to_arr["request"]["files"]["progressive"];
        $final_link_arr = array();
         
        //Create array containing the detail of video 
        for($i = 0; $i < count($link_array); $i++) { $link_array[$i]["title"] = $this->video_title;
            $mime = explode("/", $link_array[$i]["mime"]);
            $link_array[$i]["format"] = $mime[1];
        }
        return $link_array;
    }
     
    /*
     * Validate the given video url
     * return bool
     */
    public function hasVideo()
    {
        $valid = true;
        $data = @file_get_contents($this->video_url);
// Get Youtube videoplayback url  
        if($data === false)
        {
            $valid = false;
        }
        return $valid;
    }
}
class ytt 
{
    function generateId($url)
    {
        $id = '';
        if (is_int($url)) {
            $id = $url;
        } elseif (preg_match('#(\d+)/?$#', $url, $matches)) {
            $id = $matches[1];
        }

        return $id;
    }

    function cleanStr($str)
    {
        return html_entity_decode(strip_tags($str), ENT_QUOTES, 'UTF-8');
    }

    function getSDLink($curl_content)
    {
        $regexRateLimit = '/sd_src_no_ratelimit:"([^"]+)"/';
        $regexSrc = '/sd_src:"([^"]+)"/';

        if (preg_match($regexRateLimit, $curl_content, $match)) {
            return $match[1];
        } elseif (preg_match($regexSrc, $curl_content, $match)) {
            return $match[1];
        } else {
            return false;
        }
    }

    function getHDLink($curl_content)
    {
        $regexRateLimit = '/hd_src_no_ratelimit:"([^"]+)"/';
        $regexSrc = '/hd_src:"([^"]+)"/';

        if (preg_match($regexRateLimit, $curl_content, $match)) {
            return $match[1];
        } elseif (preg_match($regexSrc, $curl_content, $match)) {
            return $match[1];
        } else {
            return false;
        }
    }

    function getTitle($curl_content)
    {
        $title = null;
        if (preg_match('/h2 class="uiHeaderTitle"?[^>]+>(.+?)<\/h2>/', $curl_content, $matches)) {
            $title = $matches[1];
        } elseif (preg_match('/title id="pageTitle">(.+?)<\/title>/', $curl_content, $matches)) {
            $title = $matches[1];
        }
                    $ytt = new ytt();
        return $ytt->cleanStr($title);
    }

    function getDescription($curl_content)
    {
        if (preg_match('/span class="hasCaption">(.+?)<\/span>/', $curl_content, $matches)) {
            return cleanStr($matches[1]);
        }

        return false;
    }

}    



class twitter
{

    function get_url()
    {
        return 'http://ecommerce.digitalopment.com/';
    }

    function find_id($url)
    {
        $domain = str_ireplace("www.", "", parse_url($url, PHP_URL_HOST));
        switch ($domain) {
            case "twitter.com":
                $arr = explode("/", $url);
                return end($arr);
                break;
            case "mobile.twitter.com":
                $arr = explode("/", $url);
                return end($arr);
                break;
            default:
                $arr = explode("/", $url);
                return end($arr);
                break;
        }
    }

    function get_token()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_url() . "/assets/js/codebird-cors-proxy/oauth2/token",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "grant_type=client_credentials",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "x-authorization: Basic SzB3OHJsRENCNnpCQjczOVRHdDFCTFkybjozZGs5b3FjN0NRb0k5MGZDeWs5SmNaRXZTODhidmtQMVlIeEkzeWx5b3JsMWNOYUQ1SA=="
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return false;
        } else {
            return json_decode($response, true);
        }
    }

    function tweet_data($tweet_id)
    {
        $curl = curl_init();
        $token_data = $this->get_token();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->get_url() . "/assets/js/codebird-cors-proxy/1.1/statuses/show/$tweet_id.json?tweet_mode=extended&include_entities=true",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-authorization: Bearer " . $token_data["access_token"]
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return false;
        } else {
            return json_decode($response, true);
        }
    }

    function media_info($url)
    {
        $url = preg_replace('/\?.*/', '', $url);
        $tweet_data = $this->tweet_data($this->find_id($url));
        $data["title"] = $this->clean_title($tweet_data["full_text"]);
        $data["thumbnail"] = $tweet_data["entities"]["media"][0]["media_url_https"];
        $i = 0;
        if (isset($tweet_data["extended_entities"]["media"][0]) != "") {
            foreach ($tweet_data["extended_entities"]["media"][0]["video_info"]["variants"] as $video) {
                if ($video["content_type"] == "video/mp4") {
                    $data["links"][$i]["url"] = $video["url"];
                    $data["links"][$i]["type"] = "mp4";
                    $data["links"][$i]["size"] = get_file_size($data["links"][$i]["url"]);
                    $data["links"][$i]["quality"] = $this->get_quality($data["links"][$i]["url"]);
                    $data["links"][$i]["mute"] = "no";
                    $i++;
                }
            }
            $data["source"] = "twitter";
            return $data;
        } else {
            return false;
        }
    }

    function clean_title($string)
    {
        preg_match_all('/(.*?)https:\/\/t.co\//', $string, $output);
        if (!empty($output[1][0])) {
            return $output[1][0];
        } else {
            return "Undefined";
        }
    }

    function get_quality($url)
    {
        preg_match_all('/vid\/(.*?)x(.*?)\//', $url, $output);
        if (!empty($output[2][0])) {
            return $output[2][0] . "p";
        } else {
            return "gif";
        }
    }
}