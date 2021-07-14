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
  autoplay: true,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    767: {
      items: 3
    },

    1024: {
      items: 3
    },

    1366: {
      items: 3
    },

    1500: {
      items: 3
    }

  }
});