<?php

class likee
{
    function media_info($url)
    {
        preg_match('/video\/\d{6,20}/', $url, $video_id);
        $video_id = str_replace("video/", "", $video_id[0]);
        if ($video_id != "") {
            $video_data = $this->get_video_data($video_id);
            $video["title"] = $video_data["msgText"];
            $video["source"] = "likee";
            $video["thumbnail"] = $video_data["image1"];
            $video["duration"] = format_seconds($video_data["optionData"]["dur"] / 1000);
            $video["links"][0]["url"] = $video_data["videoUrl"];
            $video["links"][0]["type"] = "mp4";
            $video["links"][0]["size"] = format_size($video_data["optionData"]["size"]);
            $video["links"][0]["quality"] = min($video_data["videoHeight"], $video_data["videoWidth"]) . "p";
            $video["links"][0]["mute"] = "no";
            return $video;
        } else {
            return false;
        }
    }

    function get_video_data($video_id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://likee.com/app/videoApi/getVideoInfo",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "postIds=$video_id",
            CURLOPT_HTTPHEADER => array(
                "authority: likee.com",
                "accept: application/json, text/plain, */*",
                "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36",
                "content-type: application/x-www-form-urlencoded",
                "origin: https://likee.com",
                "sec-fetch-site: same-origin",
                "sec-fetch-mode: cors",
                "referer: https://likee.com/",
                "accept-encoding: gzip, deflate, br",
                "accept-language: en-GB,en;q=0.9,tr-TR;q=0.8,tr;q=0.7,en-US;q=0.6"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true)["data"][0];
    }
}