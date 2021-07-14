  document
  .getElementById('target')
  .addEventListener('change', function () {
    'use strict';
    var vis = document.querySelector('.vis'),   
      target = document.getElementById(this.value);
    if (vis !== null) {
      vis.className = 'inv';
    }
    if (target !== null ) {
      target.className = 'vis';
    }
  
});
  // CAREER SLICK SLIDER JS START
$(document).ready(function() {
    $('.rtl-slider-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        fade: true,
        asNavFor: '.rtl-slider-nav-2'
    });
    $('.rtl-slider-nav-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical: true,
        asNavFor: '.rtl-slider-2',
        centerMode: false,
        focusOnSelect: true,
        prevArrow: ".thumb-prev",
        nextArrow: ".thumb-next",
    });
});
// CAREER SLICK SLIDER JS END

  $('.video-h').hide();
  $('#1-thumb').show();
function getAlert(image) {

  $('#video-thumb-'+image).show();
  $('#'+image).hide();
}
function mouseout(image) {

  var str = image.substring(12);
  $('#video-thumb-'+str).hide();
  $('#'+str).show();
}
  // OWL CAROUSEL
jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
   navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  autoplay: false,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    767: {
      items: 1
    },

    1024: {
      items: 1
    },

    1366: {
      items: 1
    },

    1500: {
      items: 1
    }

  }
});


// ABOUT US
$(document).ready(function(){
  $('.my-carousel').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    dots: true,
    merge:true,
    nav: false,
    navText: false,
    responsive:{
    0:{
      items: 1
     },
   600:{
      items: 1
    }
  }
  });
})
// INDEX COUNTER START
var a = 0;
$(window).scroll(function() {
    var oTop = $('#aboutline').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('#aboutline').append('<svg xmlns="http://www.w3.org/2000/svg" width="1925.433" height="483.38" viewBox="0 0 1925.433 483.38"><defs><style>.line2{fill:none;stroke:#d6b874;stroke-linecap:round;stroke-width:3px;}</style></defs><path class="line2" d="M-17844-10270.828S-17437-9975-17162-10145s44-189-62-91-140,246,127,184,1173-464,1173-464" transform="translate(17846.793 10518.64)"/></svg>')
       a = 1;
    }
});
