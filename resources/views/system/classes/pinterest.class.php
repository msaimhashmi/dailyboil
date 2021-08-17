<?php

class pinterest
{
    function media_info($url)
    {
        $page_source = url_get_contents($url);
        $video["title"] = get_string_between($page_source, "<title>", "</title>");
        $video["source"] = "pinterest";
        $video["thumbnail"] = get_string_between($page_source, '"image_cover_url":"', '"');
        $video_data = get_string_between($page_source, '<script id="initial-state" type="application/json">', '</script>');
        $streams = json_decode($video_data, true)["resourceResponses"][0]["response"]["data"]["videos"]["video_list"];
        if ($streams != "") {
            $i = 0;
            foreach ($streams as $stream) {
                $ext = pathinfo(parse_url($stream["url"])["path"], PATHINFO_EXTENSION);
                if ($ext != "m3u8") {
                    $video["links"][$i]["url"] = $stream["url"];
                    $video["links"][$i]["type"] = $ext;
                    $video["links"][$i]["size"] = get_file_size($video["links"][$i]["url"]);
                    $video["links"][$i]["quality"] = min($stream["height"], $stream["width"]) . "p";
                    $video["links"][$i]["mute"] = "no";
                    $i++;
                }
            }
            return $video;
        } else {
            return false;
        }
    }
}