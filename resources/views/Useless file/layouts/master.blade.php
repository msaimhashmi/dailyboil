
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/images/sources/favicon.png">
    <link type="text/css" href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/style.css" rel="stylesheet">
        <title>Download All Videos</title>
    <html lang="{{ app()->getLocale() }}">
    <meta name="description" content="The #1 Free Online Video Downloader allows you to download videos from Facebook, Vimeo, Break, Liveleak, Instagram, Soundcloud, Imgur and many more!">
    <meta name="keywords" content="download facebook videos, video downloader, facebook downloader, download online videos, download streaming videos">

    <!-- Facebook Open Graph Meta Tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="Download All Videos" />
    <meta property="og:description" content="The #1 Free Online Video Downloader allows you to download videos from Facebook, Vimeo, Break, Liveleak, Instagram, Soundcloud, Imgur and many more!" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/images/cover.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="547" />
    <meta property="og:image:height" content="293" />
    <meta property="og:image:alt" content="Download All Videos" />
    <meta property="fb:app_id" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="website" />
    <meta name="twitter:title" content="Download All Videos" />
    <meta name="twitter:description" content="The #1 Free Online Video Downloader allows you to download videos from Facebook, Vimeo, Break, Liveleak, Instagram, Soundcloud, Imgur and many more!" />
    <meta name="twitter:image" content="assets/images/cover.png" />
    <!-- Google Structured Data -->
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"","name":"Download All Videos","potentialAction":{"@type":"SearchAction","target":"?url={url}","query-input":"required name=url"}}</script>

</head>
<body>
    <header>
        <div class="navbar navbar-default navbar-static-top transparent" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">
                        <img class="img-responsive" src="/assets/uploads/{{$Generalsettings->logo}}" />
                    </a>
                </div>
                <nav class="collapse navbar-collapse" id="main-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="btn normal-lined" href="/">
                                @foreach($json as $member)
                                    {{ $member['home'] }}
                                @endforeach
                            </a>
                        </li>
                        @foreach($headerPages as $page)
                            <li>
                                @if($page->status ==1)
                                <a class="btn normal-lined" href="{{"/page/".$page->id}}">{{$page->title}}</a>
                                @endif
                            </li>
                        @endforeach
                        <li>
                            <a class="btn normal-lined" href="/contact">
                                @foreach($json as $member)
                                    {{ $member['contact_us'] }}
                                @endforeach
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="btn normal-lined dropdown-toggle" id="languages-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Language<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu language-dropdown" aria-labelledby="languages-dropdown">
                                @foreach($languages as $language)
                                <li class="lang-li">
                                    @if($language->status =='1')
                                        @if (URL::current() == 'http://downloader_lara.test/contact')  
                                         <a href="/contact/{{$language->code}}/{{rand(1,100)}}">
                                            <img width="20" src="/assets/countries/flags/{{$language->flag}}.svg">
                                            {{$language->code}}
                                        </a> 
                                        @elseif(URL::current() =='http://downloader_lara.test')  
                                         <a href="/{{$language->code}}/{{rand(1,100)}}">
                                            <img width="20" src="/assets/countries/flags/{{$language->flag}}.svg">
                                            {{$language->code}}
                                        </a>
                                        @elseif(URL::current() !='http://downloader_lara.test')  
                                         <a href="/contact/{{$language->code}}/{{rand(1,100)}}">
                                            <img width="20" src="/assets/countries/flags/{{$language->flag}}.svg">
                                            {{$language->code}}
                                        </a> 
                                        @endif
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> 
    </header>
    <div style="background-image:url(/assets/uploads/{{$Generalsettings->backgroundImage}})" class="hero-section clearfix">
        <div class="container">
        <div class="download-holder">
            <h2>
                <a href="">
                    <img src="/assets/uploads/{{$Generalsettings->logoLight}}" class="center-block">
                    <div class="clearfix"></div>
                    @foreach($json as $member){{ $member['title'] }}@endforeach
                </a>
            </h2>

            <div class="row">
                <div class="search col-md-8 col-md-offset-2">
                    <form method="get" action="/video/api" name="sbmt">
                        <div class="input-group">
                            <input type="text" class="form-control link-input" name="url">
                            {{-- <input onclick="this.select();" id="url" type="text" class="form-control link-input" name="url" placeholder="@foreach($json as $member){{ $member['search_bar_placeholder'] }}@endforeach" value="" required /> --}}
                            <span class="input-group-btn">
                                <button class="btn btn-default link-btn" type="submit">
                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <main class="py-4">
        @yield('contentt')
    </main>
<footer>
    <div class="clearfix"></div>
    <div class="footer-wraper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-left-text">
                    <a class="footer-small-logo" href="#">
                        <img class="img-responsive" src="/assets/uploads/{{$Generalsettings->logo}}">
                    </a>
                    <span class="footer__copyright">
                        <span class="opacity">@foreach($json as $member){{ $member['copyright']}}@ 2020 {{$Generalsettings->title}} {{$member['all_rights_reserved'] }}@endforeach</span>
                    </span>
                </div>
                <div class="col-md-6">
                    <nav class="nav footer__nav">
                                            </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="/assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/custom.js"></script><script id="script-append" type="text/javascript">
    $(document).ready(function() {
        function showVideo(ajaxresult,fromHistory) {
            $(document).off("click",".video-thumb");
            $(document).off("click",".vd-down");
            $("#loader-div").addClass("hide");
            $("#video-data").removeClass("hide").html(ajaxresult.pageContent);
            $("#scripts").remove();
            $("#script-append").after(ajaxresult.scriptContent);
            if(ajaxresult.found == 1 && fromHistory == false) {
                var state = ajaxresult;
                window.history.pushState(state,ajaxresult.title,baseUrl+"?url="+ajaxresult.url);
                document.title = ajaxresult.title;
            }
            else {
                $("#url").val(ajaxresult.url);
            }
            $('html, body').animate({
                scrollTop: $("#video-data").offset().top
            },800);
        }
        
        $("#url-form").submit(function(e) {
            e.preventDefault();
            var url = $("#url").val();
            if(url != null) {
                $("#loader-div").removeClass("hide");
                $("#video-data").html("").addClass("hide");
                $.ajax ({
                    type: "POST",
                    url: "ApiController/get_video_data_ajax",
                    data: {"url":url},
                    dataType: "json",
                    success: function(ajaxresult) {
                        showVideo(ajaxresult,false);
                    }
                });
            }
        });
        
        $(window).on("popstate", function () {
            if (history.state) {
                showVideo(history.state,true);
            }
            else {
                $("#video-data").html("").addClass("hide");
                $("#scripts").remove();
                $("#url").val("");
            }
        });
    });
    var lang_vars = [];
    lang_vars['download'] = 'Download';
    lang_vars['more'] = 'More';
    lang_vars['less'] = 'Less';
</script>
</body>
</html>