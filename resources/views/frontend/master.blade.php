<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Dailyboil | Professional Video Downloader |  Free Online Downloader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta discription -->
    <meta name="description" content="Dailyboil Professional video downloader where you can download free online  Videos from Youtube, Vimeo, Facebook, Instagram, Daily Motion etc.">
    <!-- Faveicon -->
    <link rel="icon" type="image/gif" href="/assets/frontend/img/faveicon.png">
    <!-- Faveicon -->
    <link rel="canonical" href="https://dailyboil.com/" />
    <!-- Bootstrap 4.1 Links -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/style.css">
    <!-- END -->
    <!-- FontAwesom -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- END -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->
  </head>
  <body class="d-flex flex-column">
    <div id="page-content">
      <!-- <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <h1 class="font-weight-light mt-4 text-white">Sticky Footer using Flexbox</h1>
            <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
          </div>
        </div>
        </div> -->
      <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapsingNavbar">
              <ul class="navbar-nav">
                <li class="nav-item active">

                  <a class="nav-link" href="/"><button class="btn btn-light active">@foreach($json as $member){{ $member['home'] }}@endforeach</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about"><button class="btn btn-light">About Us</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><button class="btn btn-light">Blog</button></a>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                <a class="nav-link" href="#" data-toggle="dropdown"><button type="button" class="btn btn-light dropdown-toggle">Language
                </button></a>
                  <div class="dropdown-menu language">
                    @foreach($languages as $language)
                        @if($language->status =='1')
                            @if (URL::current() == URL('/contact'))  
                                <a class="dropdown-item" href="/contact/{{$language->code}}">{{$language->name}}</a>
                            @elseif (URL::current() == URL('/contact/'.$language->code))  
                                <a class="dropdown-item" href="/contact/{{$language->code}}">{{$language->name}}</a>
                            @elseif(URL::current() ==URL('/'))  
                                <a class="dropdown-item" href="/{{$language->code}}">{{$language->name}}</a>
                            @elseif(URL::current() !=URL('/'))
                                <a class="dropdown-item" href="/{{$language->code}}">{{$language->name}}</a>
                            @endif
                        @endif
                    @endforeach
                  </div>
                </div>
            </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/advertise"><button class="btn btn-light">Advertise</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/privacy"><button class="btn btn-light">Privacy Policy</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact"><button class="btn btn-light">@foreach($json as $member){{ $member['contact_us'] }}@endforeach</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-target="#myModal" data-toggle="modal"><button class="btn btn-light"> FAQs</button></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- END HEADER HERE AND NAVBAR -->
      <!-- START SIDEBAR DAWNLOADER -->
      @yield('contentt')
      <!-- END SIDEBAR DAWNLOADER -->
      <!-- Copyright -->
    </div>
    <footer id="sticky-footer" class="mt-4 py-4">
      <div class="container text-center">
        <p class="copyright">All rights reserved copyright &copy; 2020 by <b>#Dailyboil.com<p>
      </div>
    </footer>


    <script type="text/javascript" src="/assets/frontend/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!--End JQuery 3 -->
    <!-- Bootstrap 4 JS -->
    <script type="text/javascript" src="/assets/frontend/js/bootstrap.min.js"></script>
    <!--End Bootstrap 4 JS -->
  </body>
</html>