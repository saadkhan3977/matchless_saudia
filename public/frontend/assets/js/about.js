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
    autoplay: false,
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

