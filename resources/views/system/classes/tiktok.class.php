<?php

class tiktok
{
    function media_info($url)
    {
        $url = unshorten($url);
        $web_page = url_get_contents($url);
        preg_match_all('/<script id="__NEXT_DATA__" type="application\/json" crossorigin="anonymous">(.*?)<\/script>/', $web_page, $match);
        if (isset($match[1][0]) != "") {
            $data = json_decode($match[1][0], true);
            $video["source"] = "tiktok";
            $video["title"] = $data["props"]["pageProps"]["shareMeta"]["title"];
            $video["thumbnail"] = $data["props"]["pageProps"]["shareMeta"]["image"]["url"];
            $video["links"][0]["url"] = $data["props"]["pageProps"]["videoData"]["itemInfos"]["video"]["urls"][0];
            $video["links"][0]["type"] = "mp4";
            $video["links"][0]["size"] = get_file_size($video["links"][0]["url"]);
            $video["links"][0]["quality"] = "hd";
            $video["links"][0]["mute"] = "no";
            return $video;
        } else {
            preg_match_all('/\bdata\s*=\s*({.+?})\s*;/', $web_page, $match);
            preg_match_all('@window.__INIT_PROPS__ =(.*?)</script>@si', $web_page, $match2);
            if (isset($match[1][0]) != "") {
                $data = json_decode($match[1][0], true);
                $video["source"] = "tiktok";
                $video["title"] = $data["share_info"]["share_title"];
                $video["thumbnail"] = $data["video"]["cover"]["preview_url"];
                $video["links"][0]["url"] = "https:" . $data["video"]["play_addr"]["url_list"][0];
                $video["links"][0]["type"] = "mp4";
                $video["links"][0]["size"] = get_file_size($video["links"][0]["url"]);
                $video["links"][0]["quality"] = "hd";
                $video["links"][0]["mute"] = "no";
                return $video;
            } else if (isset($match2[0][0]) != "") {
                $data = json_decode($match2[0][0], true)["/v/:id"];
                $video["source"] = "tiktok";
                $video["title"] = $data["shareMeta"]["title"];
                $video["thumbnail"] = $data["videoData"]["itemInfos"]["covers"][0];
                $video["links"][0]["url"] = $data["videoData"]["itemInfos"]["video"]["urls"][0];
                $video["links"][0]["type"] = "mp4";
                $video["links"][0]["size"] = get_file_size($video["links"][0]["url"]);
                $video["links"][0]["quality"] = "hd";
                $video["links"][0]["mute"] = "no";
                return $video;
            } else {
                return false;
            }
        }
    }
}