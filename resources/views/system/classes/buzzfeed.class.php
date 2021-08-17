<?php

class buzzfeed
{
    function media_info($url)
    {
        $web_page = url_get_contents($url);
        preg_match_all('@__NEXT_DATA__ =(.*?);@si', $web_page, $matches);
        $data = json_decode($matches[1][0], true)["props"]["pageProps"]["video"];
        $video["title"] = $data["title"];
        $video["source"] = "buzzfeed";
        $video["thumbnail"] = $data["thumbnail_url"];
        $video["links"][0]["url"] = $data["url"];
        $video["links"][0]["type"] = "mp4";
        $video["links"][0]["size"] = get_file_size($video["links"][0]["url"]);
        $video["links"][0]["quality"] = "1080p";
        $video["links"][0]["mute"] = "no";
        return $video;
    }
}