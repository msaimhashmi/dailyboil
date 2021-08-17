@extends('frontend.master')
@section('contentt')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="adsimages">
                    <img src="/assets/frontend/img/ads.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="sidebarcard">
                    <a href="https://dailyboil.com/">
                        <div class="logo1">
                            <img src="/assets/frontend/img/Logo.png">
                        </div>
                    </a>
                    <div class="inputurl">
                        <form class="example" method="get" action="/video/api" name="sbmt" autocomplete="off">
                            <input type="text" class="form-control" placeholder="https://" name="url" required="url">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                            <div class="dropdown">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Download
                            </button>
                              <div class="dropdown-menu dropdown-menu-left">
                                <p class="pl-3">Audio</p>
                                <?php $image_array = $json_array["data"]["images"]; ?>
                                <a class="dropdown-item" target="__blank" href="/downloader?link={{urlencode($image_array['0']['mp4'])}}&title={{urlencode($json_array['data']['title'])}}&type=mp3"><img src="/assets/frontend/img/02.png"> MP3 </a>
                                <p class="pl-3">Video</p>
                                <?php //-- Very simple variant
                                    $useragent = $_SERVER['HTTP_USER_AGENT']; 
                                    $iPod = stripos($useragent, "iPod"); 
                                    $iPad = stripos($useragent, "iPad"); 
                                    $iPhone = stripos($useragent, "iPhone");
                                    $Android = stripos($useragent, "Android"); 
                                    $iOS = stripos($useragent, "iOS");
                                    //-- You can add billion devices 
                                    $DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS);
            
                                    if ($DEVICE !=true) 
                                {?>
                                <a class="dropdown-item" href="/downloader?link={{urlencode($image_array['0']['mp4'])}}&title={{urlencode($json_array['data']['title'])}}&type=mp4"><img src="/assets/frontend/img/04.png"> Default 360p</a>
                                <?php }else{ ?>
                                <a class="dropdown-item" href="{{$image_array['0']['mp4']}}"><img src="/assets/frontend/img/04.png">Default 360p</a>
                                <?php } ?>
                              </div>
                            </div>
                            <div class="text-center">
                                <p class="using">By using our services you are accepting</p>
                            </div>
                            <div class="videoimage text-center">
                                <span class="video-title">{{$json_array['data']['title']}} -- {{$image_array['0']['type']}} <br></span>
                                <span class="video-time"></span>
                            </div>
                            <div class="preview">
                                <img src="{{$image_array[0]['gifv']}}" alt="">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalYT">Play Video</button>
                            <div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-body mb-0 p-0">
                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                          <blockquote class="imgur-embed-pub" lang="en" data-id="a/{{$json_array['data']['id']}}"><a href="//imgur.com/a/{{$json_array['data']['id']}}">{{$json_array['data']['title']}}</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>                           
                            </div>
                        </div>
                </div>
    <div class="container">
      <div class="row">
        <div class="domainname">
                            <div class="sharenew-button">
                              <button class="btn newsharebtn mx-auto mb-4 mt-2"  data-toggle="modal" data-target="#exampleModal"><img src="/assets/frontend/img/yshort.gif" class="sharenew"><b class="sharetext"> SHARE </b><img src="/assets/frontend/img/sharefont.gif" class="sharefont"></button>
                            </div>
                            <div class='container d-flex dailyboildomain'>
                                <div class="container">
                                    <div class="row">
                                        <div class="domainname domainnamep">
                                            <p><b>www.dailyboil.com</b></p>
                                        </div>
                                    </div>
                                </div>
                              <!-- <p><a href="/"><b>www.dailyboil.com</b></a></p>            -->
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <!-- Modal -->
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content col-12">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Share</h5><?php $actual_link = "https://dailyboil.com/" ?>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                    <div class="modal-body">
                                        <div class="icon-container1 d-flex">
                                            <div class="smd">
                                              <a href="https://twitter.com/intent/tweet?text={{$actual_link}}" target="_blank"><i class=" img-thumbnail fab fa-twitter fa-2x" style="color:#4c6ef5;background-color: aliceblue"></i></a>
                                              <p>Twitter</p>
                                            </div>
                                            <div class="smd">
                                              <a href="https://www.facebook.com/sharer.php?u={{$actual_link}}" target="_blank"><i class="img-thumbnail fab fa-facebook fa-2x" style="color: #3b5998;background-color: #D8DCE7;"></i></a>
                                              <p>Facebook</p>
                                            </div>
                                            <div class="smd">
                                              <a href="https://imo.im?text={{$actual_link}}" target="_blank"><img class="img-thumbnail" src="/assets/frontend/img/imo.png" style="color: #FF5700;background-color: #C0E6F6; width: 64px; height: 63px;padding: 15px;"></a>
                                              <p>Imo</p>
                                            </div>
                                        </div>
                                    <div class="icon-container2 d-flex">
                                        <div class="smd">
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{$actual_link}}" target="_blank"><i class="img-thumbnail fab fa-linkedin-in fa-2x " style="color: #738ADB;background-color: #C4C6C8;"></i></a>
                                            <p>LinkedIn</p>
                                        </div>
                                        <?php //-- Very simple variant
                                            $useragent = $_SERVER['HTTP_USER_AGENT']; 
                                            $iPod = stripos($useragent, "iPod"); 
                                            $iPad = stripos($useragent, "iPad"); 
                                            $iPhone = stripos($useragent, "iPhone");
                                            $Android = stripos($useragent, "Android"); 
                                            $iOS = stripos($useragent, "iOS");
                                            //-- You can add billion devices 
                                            $DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS);

                                            if ($DEVICE !=true) {?>
                                        <div class="smd">
                                          <a href="https://web.whatsapp.com/send?text={{$actual_link}}" target="_blank"><i class="img-thumbnail fab fa-whatsapp fa-2x" style="color: #25D366;background-color: #cef5dc;"></i></a>
                                          <p>Whatsapp</p>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="smd">
                                          <a href="https://api.whatsapp.com/send?text={{$actual_link}}" target="_blank"><i class="img-thumbnail fab fa-whatsapp fa-2x" style="color: #25D366;background-color: #cef5dc;"></i></a>
                                          <p>Whatsapp</p>
                                        </div> 
                                        <?php } ?>

                                        <div class="smd">
                                          <a href="http://pinterest.com/pin/create/button/?url={{$actual_link}}" target="_blank"><i class="img-thumbnail fab fa-pinterest fa-2x" style="color: #3b5998;background-color: #eceff5;"></i></a>
                                          <p>Pinterest</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="advertise">
                    <div class="row">
                        <div class="col-12">
                            <img class="adsimg1" src="/assets/frontend/img/images.png">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-12 pt-4">
                        <img class="adsimg2" src="/assets/frontend/img/images.png">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
