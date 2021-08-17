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
        <div class="alert alert-danger">
            {{$message}}
        </div>
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
                            <div class="text-center">
                                <p class="using">By using our services you are accepting</p>
                            </div>
                            <div class="videoimage text-center">
                                <span class="video-title">Dailyboil<br></span>
                                <span class="video-time">&nbsp;</span>
                            </div>
                            <div class="preview">
                                <img src="/assets/frontend/img/img-4.jpg" class="img-thumbnail">
                            </div>
                            <!--<div class="row">-->
                            <!--    <div class="col-12 pt-3 p-2">-->
                            <!--    <p class="text-center">Downloading</p>  -->
                            <!--    <div class="progress">-->
                            <!--      <div class="progress-bar" role="progressbar" style="width: 63%; background-color: green;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">63%</div>-->
                            <!--    </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </form>
                </div>
            <!-- <div class="container">
                <div class="row">
                    <div class="domainname">
                        <p><a href="#"><b>www.dailyboil.com</b> </a><i>Share</i>:<a href="#"> <i class="fas fa-share-alt-square"></i></a> </p>
                    </div>
                </div>
            </div> -->
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
