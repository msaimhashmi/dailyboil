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
    <div class="sidebar">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="sidebarcard">
            <div class="logo1">
              <a href="/" ><img src="/assets/frontend/img/Logo.png"></a>
            </div>
            <div class="inputurl">
              <form class="example" method="get" action="/video/api" name="sbmt" autocomplete="off">
                <input type="text" class="form-control" placeholder="https://" name="url" required>
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
                <img src="/assets/frontend/img/video_preview.png" class="img-thumbnail">
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="text-center d-block w-100 mr-auto oldsharebutton">
                  <button class="btn newsharebtn"  data-toggle="modal" data-target="#exampleModal"><img src="/assets/frontend/img/yshort.gif" class="sharenew"><b class="sharetext"> SHARE </b><img src="/assets/frontend/img/sharefont.gif" class="sharefont"></button>
                </div>
              </div>
              <div class="col-12">
                <div class="text-center d-block w-100 mr-auto domainnewoldname">
                  <p><a href="#"><b>www.dailyboil.com</b></a></p>
                </div>
              </div>
            </div>
          </div>
          <div class='container'>
            <div class="row">
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content col-12">
                    <div class="modal-header">
                      <h5 class="modal-title">Share</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                      <div class="icon-container1 d-flex">
                        <div class="smd">
                          <a href="https://twitter.com/" target="_blank"><i class=" img-thumbnail fab fa-twitter fa-2x" style="color:#4c6ef5;background-color: aliceblue"></i></a>
                          <p>Twitter</p>
                        </div>
                        <div class="smd">
                          <a href="https://www.facebook.com/" target="_blank"><i class="img-thumbnail fab fa-facebook fa-2x" style="color: #3b5998;background-color: #D8DCE7;"></i></a>
                          <p>Facebook</p>
                        </div>
                        <div class="smd">
                          <a href="https://imo.im/" target="_blank"><img class="img-thumbnail" src="/assets/frontend/img/imo.png" style="color: #FF5700;background-color: #C0E6F6; width: 64px; height: 63px;padding: 15px;"></a>
                          <p>Imo</p>
                        </div>
                      </div>
                      <div class="icon-container2 d-flex">
                        <div class="smd">
                          <a href="https://www.linkedin.com/" target="_blank"><i class="img-thumbnail fab fa-linkedin-in fa-2x " style="color: #738ADB;background-color: #C4C6C8;"></i></a>
                          <p>LinkedIn</p>
                        </div>
                        <div class="smd">
                          <a href="https://www.whatsapp.com/" target="_blank"><i class="img-thumbnail fab fa-whatsapp fa-2x" style="color: #25D366;background-color: #cef5dc;"></i></a>
                          <p>Whatsapp</p>
                        </div>
                        <div class="smd">
                          <a href="https://www.pinterest.com/" target="_blank"><i class="img-thumbnail fab fa-pinterest fa-2x" style="color: #3b5998;background-color: #eceff5;"></i></a>
                          <p>Pinterest</p>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="modal-footer">
                      <label style="font-weight: 600">Page Link <span class="message"></span></label><br />
                      <div class="row"> <input class="col-10 ur" type="url" placeholder="https://dailyboil.com/" id="myInput" aria-describedby="inputGroup-sizing-default" style="height: 40px;"> <button class="cpy" onclick="myFunction()"><i class="far fa-clone"></i></button> </div>
                    </div> -->
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
  </div>
</section>
@endsection