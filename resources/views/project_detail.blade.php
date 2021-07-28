@extends('layouts.master')
@section('page-title')
    Projects {{$data->title}}
@endsection
@section('mainContent')

<section>
  <div class="pinside-main" style="background-image: url(../uploads/project/{{$data->logo}});">
    <div class="scroll-downs">
      <div class="mousey">
        <div class="scroller"></div>
      </div>
      <div class="pi-head">
        <h6>{{$data->category}}</h6>
        <h2>{{$data->title}}</h2>
      </div>
    </div>
  </div>
</section>

<section>
    <div class="container">
      <div class="inside-pro">
        <br>
<section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
    <article class=" animatable fadeInDown">
        <img src="/frontend/assets/img/opi1.jpg" class="img-responsive" />
    </article>
    <article class=" animatable fadeInDown">
        <img src="/frontend/assets/img/opi2.jpg" class="img-responsive" />
    </article>


    </section>
       </div>
      </div>
   </section>

{{-- <section>
  <div class="container">
    <div class="inside-pro">
      <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
        @foreach($gallery as $row)
        <article class="animatable fadeInDown">
            <img src="/uploads/gallery/{{$row->image}}" class="img-responsive" />
        </article>
        @endforeach
      </section>
    </div>
  </div>
</section> --}}
{{-- <section>
    <div class="container">
      <div class="inside-pro">
<section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
  @foreach($gallery as $row)
    <article>
              <img src="/uploads/gallery/{{$row->image}}"  class="img-responsive">
        {{-- <img src="assets/img/pi1.png" class="img-responsive" />
    </article>
      @endforeach
    </section>
        
       </div>
      </div>
   </section> --}} 

   <section>
     <div class="container">
       <div class="inside-main animatable fadeInDown">
         <p class="project-1">project info</p>
         <h2>Main Description</h2>
         <p>{{$data->description}}</p>
       </div>
     </div>
   </section>
   <section>
     <div class="container">
       <div class="inside-details">
         <div class="row animatable fadeInDown">
           <div class="col-lg-3 col-md-3 col-sm-12">
             <h5>Client</h5>
             <p>{{$data->title}}</p>
           </div>
           {{-- <div class="col-lg-3 col-md-3 col-sm-12">
             <h5>Date</h5>
             <p>{{$data->created_at}}</p>
           </div> --}}
           <div class="col-lg-3 col-md-3 col-sm-12">
             <h5>Website</h5>
             <a href="{{$data->website}}"><p>{{$data->website}}</p></a>
           </div>
           {{-- <div class="col-lg-3 col-md-3 col-sm-12">
             <h5>Services</h5>
             <a href="#"><p>SEO, Web Design, Branding, Social Media Marketing</p></a>
           </div> --}}
         </div>
         <br>
        <a href="{{$data->video}}" class="animatable fadeInDown video-popup mfp-iframe" data-lity> <img class="play-thumb" src="/frontend/assets/img/play.png"></a>
         <img src="/uploads/project/{{$data->image}}">
         <div class="like-share">
           <a href="#"><button type="button" class="btn btn-light"><i class="fas fa-heart"></i>0</button></a>
           <a href="https://www.facebook.com/sharer/sharer.php?u={{$data->video}}&display=popup"><button type="button" class="btn btn-light"><i class="fas fa-share-alt"></i>Share</button></a>
         </div>
       </div>
     </div>
   </section>
   <section>
  <div class="container">
    <div class="project-inside-head">
      <h2>Similar Projects</h2>
    </div>
    <div class="owl-slider">
        <div id="carousel" class="owl-carousel inside-slider-custom" style="height: 400px;">
          @foreach($projects as $project)
          <div class="item">
            <a href="projectinside.html">
          <div class="proback">
            <img src="/uploads/project/{{$project->image}}" alt="">
            <div class="proback-info">
            <p>{{$project->category}}</p>
            <h3>{{$project->title}}</h3>
            </div>
          </div>
          </a>
          </div>
          @endforeach
        </div>
        </div>
    </div>
  </div>
</section>
 {{-- Project Inside --}}
    <script src="https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007714979/custom/page/hack-a-thon-3/masonry.min.min.js"></script>
    <script src="https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007849180/custom/page/hack-a-thon-3/isotope.min.js"></script>
    <script src="/frontend/assets/js/projectinside.js"></script>

    <script>
  $( function() {
  var $grid = $('.grid').isotope({
    itemSelector: 'article'
  });

  // filter buttons
  $('.filters-button-group').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
});

// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  return function debounced() {
    if ( timeout ) {
      clearTimeout( timeout );
    }
    function delayed() {
      fn();
      timeout = null;
    }
    timeout = setTimeout( delayed, threshold || 100 );
  }
}

$(window).bind("load", function() {
  $('#all').click();
});
</script>
@endsection