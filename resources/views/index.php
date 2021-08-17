<?php
require_once __DIR__ . "/system/config.php";
$template = $config["template"];
if (isset($_GET["u"]) != "") {
    $newURL = $config["url"] . "/#url=" . $_GET["u"];
    redirect($newURL);
}
if (isset(parse_url($config["url"])["path"]) != "") {
    $path = parse_url($config["url"])["path"];
} else {
    $path = "";
}
$slug = substr(str_replace($path, "", $_SERVER["REQUEST_URI"]), 1);
$slug = strtok($slug, '?');
include(__DIR__ . "/template/" . $template . "/functions.php");
ob_start("sanitize_output");
$content["content_type"] = -1;
if (isset($_GET["lang"]) != "") {
    if (language_exists(clear_string($_GET["lang"])) === true) {
        $_SESSION["current_language"] = clear_string($_GET["lang"]);
        if (isset($_SERVER["HTTP_REFERER"]) != "") {
            redirect($_SERVER["HTTP_REFERER"]);
        } else {
            redirect($config["url"]);
        }
    } else {
        if (isset($_SERVER["HTTP_REFERER"]) != "") {
            redirect($_SERVER["HTTP_REFERER"]);
        } else {
            redirect($config["url"]);
        }
    }
}
switch (true) {
    default:
        include(__DIR__ . "/template/" . $template . "/header.php");
        include(__DIR__ . "/template/" . $template . "/main.php");
        include(__DIR__ . "/template/" . $template . "/footer.php");
        break;
    case($slug != ""):
        switch ($slug) {
            case "watch":
                if (isset($_GET["v"]) != "") {
                    $videoId = $_GET["v"];
                    $newURL = $config["url"] . "/#url=https://www.youtube.com/watch?v=" . $videoId;
                    redirect($newURL);
                } else {
                    redirect($config["url"]);
                }
                break;
            case "sitemap.xml":
                include(__DIR__ . "/sitemap.php");
                break;
            default:
                $page_exists = database::slug_exists($slug);
                if ($page_exists === 0) {
                    header('HTTP/1.0 404 Not Found');
                    $slug = "";
                    $content["content_type"] = 0;
                    include(__DIR__ . "/template/" . $template . "/header.php");
                    include(__DIR__ . "/template/" . $template . "/404.php");
                    include(__DIR__ . "/template/" . $template . "/footer.php");
                } else {
                    include(__DIR__ . "/template/" . $template . "/header.php");
                    include(__DIR__ . "/template/" . $template . "/page.php");
                    include(__DIR__ . "/template/" . $template . "/footer.php");
                }
                break;
        }
        break;
}