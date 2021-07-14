<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css"/>
    {{--     <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/lity.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> --}}
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/lity.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/assets/css/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>MLS | @yield('page-title')</title>
    {{-- <title>MLS | Home</title> --}}
  </head>
  <?php
    $preloaders = new App\Models\GeneralSettingPreloader;
    $preloader = $preloaders::first();

    $segments = request()->segments();
    $langs = end($segments);
  ?>
  <body class="scrollbar" id="style-1" @if($langs =='ar') dir="rtl" @endif>
<style type="text/css">
  
.loading{
    /*display: none;*/
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 999;
    background: rgba(255,255,255,0.8) url("/uploads/preloader/{{($preloader) ? $preloader->website_loader : '' }}") center no-repeat;
}
</style>
<header class="wrap_nav">
      <nav class="navbar navbar-expand-lg custom-nav navbar-light">
        <div class="container max-con">
          <?php 
            $logos = new App\Models\GeneralSettingLogo;
            $logo = $logos::first();
          ?>
          <a class="navbar-brand cutom-logo" href="/"><img src="/uploads/logo/{{ ($logo) ? $logo->file : null}}"></a>
          <div class="search__digitalop d-block d-lg-none">
            <i class="fa fa-search search-btn search-btn-overlay"></i>
            <div class="searchblock search-overlay">
              <div class="centered">
                <div class="search-box">
                  <i id="" class="fa fa-times fa-2x close-btn"></i>
                  <div class="search__logo">
                    <img src="/frontend/assets/img/head.png" alt="">
                  </div>
                  <form>
                    <div class="autocomplete">
                      <input id="myInput" type="text" name="search" placeholder="Search">
                    </div>
                    <div class="digi-btn">
                      <button type="submit" class="btn btn-light">Search</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <button class="navbar-toggler custom-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
         <i class="fas fa-bars nav-bar-custom"></i>
       </button>
       <?php 
        if($langs =='ar'){
            $public_menu = Menu::getByName('Header-Menu-'.$langs); 
        }
        else{
            $public_menu = Menu::getByName('Header-Menu-En'); 
        }
       ?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav custom-ul ml-auto btn-15 ">
              @if($public_menu)
              @foreach($public_menu as $menu)
              <li class="nav-item active"><a class="nav-link menu-item" data-menu-name="Home" id="custom-a" href="@if($langs =='ar') {{  $menu['link'] .'/lang/ar' }} @else {{  $menu['link'] }} @endif">{{ $menu['label'] }} <span class="sr-only">(current)</span></a></li>
              @endforeach
              @endif
            </ul>
            <div class="language-changer d-lg-none d-md-block d-sm-block">
            <a href=""><img src="/frontend/assets/img/Saudi_Arabia.png" alt=""></a>
            <a href=""><img src="/frontend/assets/img/us.png" alt=""></a>
          </div>

            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"> -->
                  <div class="custom-digi mt-4 d-lg-none d-md-block d-sm-block">
                    <h4>Contact US</h4>
                    <p><span>Email : </span>info@matchlesssaudia.com</p>
                    <p><span>Phone : </span>+966 554 883 2032</p>
                  </div>
                  <div class="follow-section d-lg-none d-md-block d-sm-block">
                <div class="social-icons mt-3">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f facebook-2"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
                    <!-- </div> -->
          </div>
          <div class="search__digitalop d-lg-block d-none ">
            <i class="fa fa-search search-btn search-btn-overlay"></i>
            <div class="searchblock search-overlay">
              <div class="centered">
                <div class="search-box">
                  <i id="" class="fa fa-times fa-2x close-btn"></i>
                  <div class="search__logo">
                    <img src="/frontend/assets/img/head.png" alt="">
                  </div>
                  <form>
                    <div class="autocomplete">
                      <input id="myInput" type="text" name="search" placeholder="Search">
                    </div>
                    <div class="digi-btn">
                      <button type="submit" class="btn btn-light">Search</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="language-changer d-lg-block d-none">
            <a href="/lang/ar"><img src="/frontend/assets/img/Saudi_Arabia.png" alt=""></a>
            <a href="/lang/en"><img src="/frontend/assets/img/us.png" alt=""></a>
          </div>
        </div>
      </nav>
    </header>
    <?php
      $links = new App\Models\SocialSettingLinks;
      $link = $links::first();

      $footers = new App\Models\GeneralSettingHeader;
      if($langs =='ar'){
        $footer = $footers::where('lang',$langs)->first();
      }
      else{
        $footer = $footers::where('lang','en')->first();
      }
    ?>
    <div class="side-icon-bar">
      <p>{{ ($footer) ? $footer->getintouch : null}}</p>
      {{-- @if($link) @if($link->facebook_status !='')
      <a href="{{$link->facebook}}" class="facebook"><i class="fab fa-facebook-f"></i></a> 
      @endif @endif --}}
      @if($link) @if($link->twitter_status !='')
      <a href="{{$link->twitter}}"><i class="fab fa-twitter twitter"></i></a>
      @endif @endif
      @if($link) @if($link->instagram_status !='')
      <a href="{{$link->instagram}}"><i class="fab fa-instagram instagram"></i></a>
      @endif @endif
      @if($link) @if($link->linkedin_status !='')
      <a href="{{$link->linkedin}}"><i class="fab fa-linkedin linkedin"></i></a>
      @endif @endif
      @if($link) @if($link->whatsapp_status !='')
      <a href="{{$link->whatsapp}}"><i class="fab fa-whatsapp whatsapp"></i></a>
      @endif @endif
      &nbsp; 
    </div>
    @yield('mainContent')
    <a href="#" id="scroll" style="display: none;">
          <i class="fa fa-chevron-up"></i></a>
    <footer>
      <div class="footer-main">
        <div class="container max-con">
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6">
              <div class="digi-section">
                <div class="digi-logo">
                  <a href="/"><img src="/uploads/logo/{{ ($logo) ? $logo->file : null}}" alt="Logo"></a>
                </div>
                <div class="footer-content">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="custom-digi">
                        <h4>{{ ($footer) ? $footer->title : null}}</h4>
                        <p><span>{{ ($footer) ? $footer->email_label : null}} : </span>{{ ($footer) ? $footer->email : null}}</p>
                        <p><span>{{ ($footer) ? $footer->phone_label : null}} : </span>{{ ($footer) ? $footer->phone : null}}</p>
                      </div>
                      <div class="follow-section">
                    <div class="social-icons mt-3">
                      <ul>
                        
                        @if($link) @if($link->facebook_status !='')
                        <li><a href="{{$link->facebook}}"><i class="fab fa-facebook-f facebook-2"></i></a></li>
                        @endif @endif
                        
                        @if($link) @if($link->twitter_status !='')
                        <li><a href="{{$link->twitter}}"><i class="fab fa-twitter twitter"></i></a></li>
                        @endif @endif
                        
                        @if($link) @if($link->instagram_status !='')
                        <li><a href="{{$link->instagram}}"><i class="fab fa-instagram instagram"></i></a></li>
                        @endif @endif
                        
                        @if($link) @if($link->linkedin_status !='')
                        <li><a href="{{$link->linkedin}}"><i class="fab fa-linkedin linkedin"></i></a></li>
                        @endif @endif
                        
                        @if($link) @if($link->whatsapp_status !='')
                        <li><a href="{{$link->whatsapp}}"><i class="fab fa-whatsapp whatsapp"></i></a></li>
                        @endif @endif
                      </ul>
                    </div>
                  </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                      <div class="site-main">
                        <h5>Site Map</h5>
                        <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="aboutus.html">About Us</a></li>
                          <li><a href="career.html">Careers</a></li>
                          <li><a href="contact.html">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                      <div class="site-main">
                        <h5>Our Projects</h5>
                        <ul>
                          <li><a href="/">0-Kazu</a></li>
                          <li><a href="#">Dekan Chapati</a></li>
                          <li><a href="#">Amaly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
              @if (\Session::has('success'))
                <div class="alert alert-success">
                  <p>{{ \Session::get('success') }}</p>
                </div><br />
               @endif
               @if (\Session::has('failure'))
                <div class="alert alert-danger">
                  <p>{{ \Session::get('failure') }}</p>
                </div><br />
               @endif
              <div class="subscribe-scetion">
                <form method="post" action="{{route('subscribers.store')}}">
                  @csrf
                  <label>{{ ($footer) ? $footer->subscribe : null}}</label>
                  <div class="input-group input-main">
                    <input type="email" required="" class="form-control border-right-0" name="email" placeholder="{{ ($footer) ? $footer->email_label : null}}">
                    <span class="input-group-append custom-input">
                    <a href="#"><button type="submit" class="btn border-left-0" ><i class="fas fa-arrow-right"></i></button></a>
                    </span>
                  </div>
                </form>
                @if (session('subscribed'))
                    <div class="alert alert-success">
                        {{ session('subscribed') }}
                    </div>
                @endif
                <div class="site-map">
                  <div class="row">
                    <div class="col-12">
                      <div class="site-main">
                        <h5>Help</h5>
                        <ul>
                          <li><a href="#">Faq's</a></li>
                          <li><a href="#">Terms and condition</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="blog.html">Blog</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="footer-hr">
      <div class="container">
        <div class="copyrights">
          <div class="row">
            <div class="col-12">
              <div class="term-text">
                <p>{{ ($footer) ? $footer->copyright : null}}</p>
                {{-- <p>Copyright © 2021 Matchlesssaudia (Pvt. ltd)</p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
<div class="overlay">saad</div>

{{-- index --}}
  <script src="/frontend/assets/js/jquery.min.js"></script>
  <script src="/frontend/assets/js/popper.min.js"></script>
  <script src="/frontend/assets/js/script.js"></script>
  <script src="/frontend/assets/js/bootstrap.min.js"></script>
  <script src="/frontend/assets/js/lity.min.js"></script>
     <script src="/frontend/assets/js/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/frontend/assets/js/career.js"></script>
  <script src="/frontend/assets/js/index.js"></script>
{{-- index End--}}

{{-- About --}}
{{--   <script src="/frontend/assets/js/jquery.min.js"></script>
  <script src="/frontend/assets/js/popper.min.js"></script>
  <script src="/frontend/assets/js/script.js"></script>
  <script src="/frontend/assets/js/career.js"></script>
  <script src="/frontend/assets/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="/frontend/assets/js/lity.min.js"></script>
  <script src="/frontend/assets/js/slick.min.js"></script>
  <script src="/frontend/assets/js/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
{{-- About End --}}
{{--     <script src="/frontend/assets/js/jquery.min.js"></script>
    <script src="/frontend/assets/js/popper.min.js"></script>
    <script src="/frontend/assets/js/script.js"></script>
    <script src="/frontend/assets/js/bootstrap.min.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
{{--     <script src="/frontend/assets/js/lity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/frontend/assets/js/index.js"></script>
    <script src="/frontend/assets/js/about.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="/frontend/assets/js/lg-rotate.js"></script>
    <script src="/frontend/assets/js/projectinside.js"></script>

    <script>
      lightGallery(document.getElementById('lightgallery'));
    </script> --}}
    </body>
      
</html> --}}
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
      $(document).ready(function() {
        $(window).load(function() {
          $(".overlay").hide();
        });
        $(".overlay").addClass("loading");
      });
      </script> --}}