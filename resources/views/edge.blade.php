<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/lity.min.css">
    {{-- ABout Us --}}
    <link href="/frontend/assets/css/lightgallery.css" rel="stylesheet">
    {{-- Career --}}
    <link rel="stylesheet" href="/frontend/assets/css/slick.min.css">
{{-- Edge --}}
    <link rel="stylesheet" href="/frontend/assets/css/all.css">


    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="icon" href="/frontend/assets/img/favicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>MLS | Edge</title>
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
                  @if( $menu['child'] )  
                  <div class="dropdown">
                    <li class="nav-item @if('/'.request()->segment(1) == $menu['link']) active @endif"><a class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
                    <div class="dropdown-content">
                      @foreach( $menu['child'] as $child )
                      <li class="nav-item @if('/'.request()->segment(1) == $child['link']) active @endif"><a class="nav-link" href="{{ $child['link'] }}">{{ $child['label'] }}</a></li>
                      @endforeach
                    </div>
                  </div>
                  @else
                    <li class="nav-item @if('/'.request()->segment(1) == $menu['link']) active @endif"><a class="nav-link menu-item" data-menu-name="Home" id="custom-a" href="@if($langs =='ar') {{  $menu['link'] .'/lang/ar' }} @else {{  $menu['link'] }} @endif">{{ $menu['label'] }} <span class="sr-only">(current)</span></a></li>
                  @endif
              @endforeach
              @endif
            </ul>
            <div class="language-changer d-lg-none d-md-block d-sm-block">
            <a href="/lang/ar"><img src="/frontend/assets/img/Saudi_Arabia.png" alt=""></a>
            <a href="/lang/en"><img src="/frontend/assets/img/us.png" alt=""></a>
          </div>
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
            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"> -->
                  <div class="custom-digi mt-4 d-lg-none d-md-block d-sm-block">
                    <h4>{{ ($footer) ? $footer->title : null}}</h4>
                        <p><span>{{ ($footer) ? $footer->email_label : null}} : </span>{{ ($footer) ? $footer->email : null}}</p>
                        <p><span>{{ ($footer) ? $footer->phone_label : null}} : </span>{{ ($footer) ? $footer->phone : null}}</p>
                  </div>
                  <div class="follow-section d-lg-none d-md-block d-sm-block">
                <div class="social-icons mt-3">
                  <ul>
                    @if($link) @if($link->facebook !='')
                      <li><a href="{{$link->facebook}}"><i class="fab fa-facebook-f facebook-2"></i></a></li>
                    @endif @endif
                    @if($link) @if($link->twitter_status !='')
                    <li><a href="{{$link->twitter}}"><i class="fab fa-twitter twitter"></i></a></li>
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
    <div class="side-icon-bar">
      <p>{{ ($footer) ? $footer->getintouch : null}}</p>
      {{-- @if($link) @if($link->facebook_status !='')
      <a href="{{$link->facebook}}" class="facebook"><i class="fab fa-facebook-f"></i></a> 
      @endif @endif --}}
      @if($link) @if($link->facebook !='')
      <a href="{{$link->facebook}}"><i class="fab fa-facebook-f"></i></a>
      @endif @endif
      @if($link) @if($link->twitter_status !='')
      <a href="{{$link->twitter}}"><i class="fab fa-twitter "></i></a>
      @endif @endif
      @if($link) @if($link->linkedin_status !='')
      <a href="{{$link->linkedin}}"><i class="fab fa-linkedin"></i></a>
      @endif @endif
      @if($link) @if($link->whatsapp_status !='')
      <a href="{{$link->whatsapp}}"><i class="fab fa-youtube"></i></a>
      @endif @endif
      &nbsp;
    </div>
    <section>
      <a href="interior.html"><button class="interiorback"><span>Back</span></button></a>
      <div class="container">
        @foreach($secfour as $row)
          <section class="background" style="background-image: url(/uploads/interior/{{$row->image}});">
            <div class="container content-wrapper">
              <h2>{{$row->title}}</h2>
              <p>{{$row->description}}</p>
      {{-- <a href="ourproject.html"><button type="button" class="btn btn-light">Check out our portfolio</button></a> --}}
            </div>
          </section>
        @endforeach
        <div class="demobutton" ><!-- <i class="fal fa-arrow-circle-left"></i> -->
          <i class="fal fa-arrow-circle-left" onclick="btnpreviousItem()"></i>
          <i class="fal fa-arrow-circle-right" onclick="btnnextItem()"></i>
        </div>
      </div>
    </section>
    <script src="/frontend/assets/js/jquery.min.js"></script>
    <script src="/frontend/assets/js/script.js"></script>
    <script src="/frontend/assets/js/popper.min.js"></script>
    <script src="/frontend/assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>

<script>
 // ------------- VARIABLES ------------- //
var ticking = false;
var isFirefox = /Firefox/i.test(navigator.userAgent);
var isIe =
  /MSIE/i.test(navigator.userAgent) ||
  /Trident.*rv\:11\./i.test(navigator.userAgent);
var scrollSensitivitySetting = 60; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive)
var slideDurationSetting = 600; //Amount of time for which slide is "locked"
var currentSlideNumber = 0;
var totalSlideNumber = $(".background").length;

// ------------- DETERMINE DELTA/SCROLL DIRECTION ------------- //
function parallaxScroll(evt) {
  // alert('evt');

  if (isFirefox) {
    //Set delta for Firefox
    delta = evt.detail * -120;
  } else if (isIe) {
    //Set delta for IE
    delta = -evt.deltaY;
  } else {
    //Set delta for all other browsers
    delta = evt.wheelDelta;
  }
    // alert(evt.wheelDelta);
    // alert(delta);

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
    // alert(currentSlideNumber)
        nextItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      slideDurationTimeout(slideDurationSetting);
    }
  }
}

function parallaxScrolll(evt) {

  // alert(isFirefox);
  delta = '-120';

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
        nextItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      slideDurationTimeout(slideDurationSetting);
    }
  }
}

function parallaxScrollll(evt) {

  // alert(isFirefox);
  delta = '120';

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
        nextItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      slideDurationTimeout(slideDurationSetting);
    }
  }
}

// ------------- SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES ------------- //
function slideDurationTimeout(slideDuration) {
  setTimeout(function() {
    ticking = false;
  }, slideDuration);
}

// ------------- ADD EVENT LISTENER ------------- //
// alert(isFirefox)
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);

// ------------- SLIDE MOTION ------------- //
function nextItem() {
  // alert(currentSlideNumber);
  var $previousSlide = $(".background").eq(currentSlideNumber - 1);
  $previousSlide.removeClass("up-scroll").addClass("down-scroll");
}

function previousItem() {
  // alert('as');
  var $currentSlide = $(".background").eq(currentSlideNumber);
  $currentSlide.removeClass("down-scroll").addClass("up-scroll");
}

function btnnextItem() {
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
parallaxScrolll('60');
// window.addEventListener(mousewheelEvent, _.throttle(parallaxScrolll, 60), false);
}

function btnpreviousItem() {
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
parallaxScrollll('60');
// window.addEventListener(mousewheelEvent, _.throttle(parallaxScrolll, 60), false);
}


</script>
    </body>
</html>