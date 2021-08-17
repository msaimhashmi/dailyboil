<?php

class bilibili
{
    function media_info($url)
    {
        $web_page = url_get_contents($url);
        preg_match_all('window.__playinfo__=(.*?)</script>', $web_page, $matches);
        if (isset($matches[1][0]) != "") {
            $data = json_decode($matches[1][0], true)["data"]["dash"];
        } else {
            return false;
        }
    }
}