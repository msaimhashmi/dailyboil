<?php

class soundcloud
{
    function media_info($url)
    {
        $api_key = option("api_key.soundcloud");
        $track_data = url_get_contents("https://api.soundcloud.com/resolve.json?url=" . $url . "&client_id=" . $api_key);
        $track_data = json_decode($track_data, true);
        $track["title"] = $track_data["title"];
        $track["source"] = "soundcloud";
        $track["thumbnail"] = $track_data["artwork_url"];
        $track["duration"] = format_seconds($track_data["duration"] / 1000);
        $merged_file = __DIR__ . "/../storage/temp/soundcloud-" . $track_data["id"] . ".mp3";
        $website_url = json_decode(option("general_settings"), true)["url"];
        if (file_exists($merged_file)) {
            $track["links"][0]["url"] = $website_url . "/system/storage/temp/soundcloud-" . $track_data["id"] . ".mp3";
            $track["links"][0]["type"] = "mp3";
            $track["links"][0]["size"] = format_size(filesize($merged_file));
            $track["links"][0]["quality"] = "128 kbps";
            $track["links"][0]["mute"] = "no";
        } else {
            $api_query = array(
                "ids" => $track_data["id"],
                "client_id" => $api_key
            );
            $streams_data = url_get_contents("https://api-v2.soundcloud.com/tracks?" . http_build_query($api_query));
            $streams_data = json_decode($streams_data, true);
            $streams = $streams_data[0]["media"]["transcodings"];
            $i = 0;
            foreach ($streams as $stream) {
                if ($stream["format"]["protocol"] == "progressive") {
                    $mp3_url = json_decode(url_get_contents($stream["url"] . "?client_id=" . $api_key), true)["url"];
                    $track["links"][$i]["url"] = $mp3_url;
                    $track["links"][$i]["type"] = $this->get_file_type($stream["format"]["mime_type"]);
                    $track["links"][$i]["size"] = get_file_size($track["links"][$i]["url"]);
                    $track["links"][$i]["quality"] = "128 kbps";
                    $track["links"][$i]["mute"] = "no";
                    $i++;
                }
            }
            if (isset($track["links"][0]["url"]) != "") {
                return $track;
            }
            $merged = fopen($merged_file, 'a+');
            foreach ($streams as $stream) {
                if ($stream["format"]["protocol"] == "hls") {
                    $m3u8_url = json_decode(url_get_contents($stream["url"] . "?client_id=" . $api_key), true)["url"];
                    $m3u8_data = url_get_contents($m3u8_url);
                    preg_match_all('/https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&\/\/=]*)/', $m3u8_data, $streams_raw);
                    $streams = $streams_raw[0];
                    foreach ($streams as $stream) {
                        fwrite($merged, url_get_contents($stream));
                    }
                    break;
                }
            }
            $track["links"][0]["url"] = $website_url . "/system/storage/temp/soundcloud-" . $track_data["id"] . ".mp3";
            $track["links"][0]["type"] = "mp3";
            $track["links"][0]["size"] = format_size(filesize($merged_file));
            $track["links"][0]["quality"] = "128 kbps";
            $track["links"][0]["mute"] = "no";
        }
        return $track;
    }

    function get_file_type($mime_type)
    {
        preg_match('/audio\/(.*?);/', $mime_type, $match);
        switch ($match) {
            case "ogg":
                return "ogg";
            default:
                return "mp3";
        }
    }
}