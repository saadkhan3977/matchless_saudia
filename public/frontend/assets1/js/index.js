

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

// INDEX COUNTER START
var a = 0;
$(window).scroll(function() {
    var oTop = $('#svgj').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('#svgj').append('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1148" height="394" viewBox="0 0 1148 394"><defs><style>.a{fill:#fff;}.b{clip-path:url(#a);}.line{fill:none;stroke:#e1bf60;stroke-width:3px; enable-background:new 0 0 1999.007 560} </style><clipPath id="a"><rect class="a" width="1148" height="394" transform="translate(772 5014)"/></clipPath></defs><g class="b" transform="translate(-772 -5014)"><path class="line" d="M-21249.512-11701.062s-99.908,185.006,144.254,164.418c14.057-1.186,26.2-2.753,36.85-4.675a197.405,197.405,0,0,0,20.33-4.693c10.906-3.2,18.668-6.9,23.9-11.038,51.51-40.735-180.916-112.952-232.631-8.414-63.145,127.641,964.014,452.924,964.014,452.924" transform="translate(24525.646 137.531) rotate(-41)"/></g></svg>')
       a = 1;
    }
});

// OWL CAROUSEL
jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
 dots: false,
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
      items: 2
    },

    1024: {
      items: 2
    },

    1366: {
      items: 2
    },

    1500: {
      items: 2
    }

  }
});
 