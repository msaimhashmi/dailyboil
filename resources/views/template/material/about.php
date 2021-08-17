<?php if (isset($template_config["about"]) == "true") { ?>
    <div class="col-md-12 ml-auto mr-auto">
        <h2 class="title">Free Online Video Downloader</h2>
        <h5 class="description"></h5>
        <?php
        $websites = array(
            array("name" => "youtube", "color" => "#d82624"),
            array("name" => "facebook", "color" => "#3b5998"),
            array("name" => "twitter", "color" => "#00aced"),
            array("name" => "instagram", "color" => "#e4405f"),
            array("name" => "vimeo", "color" => "#1ab7ea"),
            array("name" => "dailymotion", "color" => "#0077b5"),
            array("name" => "tumblr", "color" => "#32506d"),
            array("name" => "buzzfeed", "color" => "#df2029"),
            array("name" => "break", "color" => "#b92b27"),
            array("name" => "izlesene", "color" => "#ff6600"),
            array("name" => "flickr", "color" => "#ff0084"),
            array("name" => "imgur", "color" => "#02b875"),
            array("name" => "soundcloud", "color" => "#ff3300", "music" => true),
            array("name" => "liveleak", "color" => "#dd4b39"),
            array("name" => "odnoklassniki", "color" => "#f57d00"),
            array("name" => "tiktok", "color" => "#131418"),
            array("name" => "mashable", "color" => "#0084ff"),
            array("name" => "espn", "color" => "#df2029"),
            array("name" => "imdb", "color" => "#eb4924"),
            array("name" => "bandcamp", "color" => "#21759b", "music" => true),
            array("name" => "ted", "color" => "#e62b1e"),
            array("name" => "9gag", "color" => "#000000"),
            array("name" => "vk", "color" => "#4a76a8"),
            array("name" => "pinterest", "color" => "#bf1f24"),
            array("name" => "likee", "color" => "#be3cfa")
        );
        ?>
        <div class="row">
            <?php
            //shuffle($websites);
            usort($websites, "sort_by_name");
            foreach ($websites as $site) {
                echo '<div class="col-sm-12 col-md-6 col-lg-4"><a class="btn btn-lg btn-block" style="background: ' . $site["color"] . ';" href="' . $config["url"] . '/' . $site["name"] . '-video-downloader">';
                echo ucwords($site["name"]) . ' ' . (isset($site["music"]) === true ? $lang["music"] : $lang["video"]) . ' ' . $lang["downloader"];
                echo '</a></div>';
            }
            ?>
        </div>
    </div>
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-info">
                            <i class="fas fa-play-circle"></i>
                        </div>
                        <h4 class="info-title">Download Videos from Multiple Sources</h4>
                        <p>Video Downloader Script offers you to download videos in multiple formats including MP4, M4A,
                            3GP, WEBM, MP3, JPG from multiple sources</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-success">
                            <i class="fas fa-globe-europe"></i>
                        </div>
                        <h4 class="info-title">Supported Websites</h4>
                        <p>
                            <?php
                            echo ucwords(implode(" ", array_column($websites, "name")));
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="fas fa-music"></i>
                        </div>
                        <h4 class="info-title">Download Audios</h4>
                        <p>Download audios from YouTube, TED, Soundcloud, Bandcamp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>