<?php

class vk
{
    function url_get_contents($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    function media_info($url)
    {
        $page_source = url_get_contents($url);
        $embed_hash = get_string_between($page_source, '"embed_hash":"', '"');
        $video_id = get_string_between($page_source, '"vid":', ',');
        $author_id = get_string_between($page_source, '"oid":', ',');
        if ($embed_hash != "" && $video_id != "" && $author_id != "") {
            $query = array(
                "oid" => $author_id,
                "id" => $video_id,
                "hash" => $embed_hash
            );
            $embed_url = "https://vk.com/video_ext.php?" . http_build_query($query);
            $embed_source = $this->url_get_contents($embed_url);
            $video["title"] = "VK Video " . $video_id;
            $video["source"] = "vkontakte";
            $video["thumbnail"] = get_string_between($embed_source, 'poster="', '"');
            //$video["duration"] = format_seconds(get_string_between($embed_source, 'data-duration="', '"'));
            $embed_source = preg_replace('/\s+/', '', $embed_source);
            preg_match_all('/<sourcesrc="(.*?)"type="video\/mp4"\/>/', $embed_source, $streams_raw);
            $streams_raw = $streams_raw[1];
            $streams = array();
            foreach ($streams_raw as $stream) {
                $parse_url = parse_url($stream);
                $url_path = $parse_url["path"];
                $type = pathinfo($url_path, PATHINFO_EXTENSION);
                if ($type == "mp4") {
                    $quality = get_string_between($url_path, ".", ".mp4");
                    array_push($streams, array_push($streams, array(
                        "quality" => $quality, "type" => $type, "url" => $stream
                    )));
                }
            }
            $i = 0;
            foreach ($streams as $stream) {
                $video["links"][$i]["url"] = $stream["url"];
                $video["links"][$i]["type"] = $stream["type"];
                $video["links"][$i]["size"] = get_file_size($video["links"][$i]["url"]);
                $video["links"][$i]["quality"] = $stream["quality"] . "p";
                $video["links"][$i]["mute"] = "no";
                $i++;
            }
            return $video;
        } else {
            return false;
        }
    }
}