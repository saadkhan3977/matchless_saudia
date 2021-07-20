@extends('layouts.master')
@section('page-title')
    Edit Interior Section 4
@endsection
@section('mainContent')
    <section>
      <div class="container">
        <div class="interior-main">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="edge-info">
                <h5>{{ ($secone) ? $secone->title : null}}</h5>
                <h2>{{ ($secone) ? $secone->subtitle : null}}</h2>
                <p>{{ ($secone) ? $secone->description : null}}</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="edge-detail">
                <div class="edge-border fade-in-left "></div>
                <div class="edge-detail-img">
                  <img class="" src="/uploads/interior/{{ ($secone) ? $secone->image : null}}" alt="{{ ($secone) ? $secone->title : null}}">
                </div>
                <div class="edge-detail-img2">
                  <img src="/frontend/assets/img/shape.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="strategy-info">
          <h3>{{ ($sectwoheading) ? $sectwoheading->title : null}}</h3>
          <p>{{ ($sectwoheading) ? $sectwoheading->description : null}}</p>
        </div>
        <div class="stand-main-circle">
            <div class="row">
              @foreach($sectwo as $row)
              <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="interior-box">
                  <img src="/uploads/interior/{{$row->image}}" alt="{{$row->title}}">
                  <h5>{{$row->title}}</h5>
                  <p>{{$row->description}}</p>
                </div>
              </div>
              @endforeach
            </div>
        </div>
        <div class="interior__arrow" id="interiorline">
          <svg xmlns="http://www.w3.org/2000/svg" width="1440.861" height="164.833" viewBox="0 0 1440.861 164.833"><defs><style>.line3{fill:none;stroke:#d6b874;stroke-width:2px;}</style></defs><path class="line3" d="M-15143.937,578.129l-.063,88.109v.437l151.408.03v71.861h-1.18l.444-71.861-150.961.473-208.48.884.146,66h-.765l.021-66-358.945-1.89.3,69.567h-.6V666.172h-358.922l-.063,70.339h-.857l-.024-70.339-358.977-1.5v77.289h-.8" transform="translate(16432.453 -578.129)"></path></svg>
          </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="strategy-detail">
          @foreach($secthree as $row)
          <div class="strategy-icon">
            <img src="/uploads/interior/{{$row->image}}" alt="{{$row->title}}">
            {{-- <img src="assets/img/transparency.png" alt=""> --}}
            <h6>{{$row->title}}</h6>
            <p>{{$row->description}}</p>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="interior-services-head">
          <h3>{{ ($secfourheading) ? $secfourheading->title : null}}</h3>
          <p>{{ ($secfourheading) ? $secfourheading->description : null}}</p>
        </div>
        <div class="interior-services">
          <div class="row">
            @foreach($secfour as $row)
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="grid">
                <figure class="effect-services">
                  <img src="/uploads/interior/{{$row->image}}" alt="{{$row->title}}">
                  <figcaption>
                    <h6>{{$row->title}}</h6>
                    <p>{{$row->description}}</p>
                  </figcaption>     
                </figure>
              </div>
            </div>
            @endforeach
          </div>
          <a href="edge.html"><button class="edgenext"><span>Next</span></button></a>
        </div>
      </div>
    </section>
    @endsection
{{-- <script>
var a = 0;
$(document).scroll(function() {
      alert('oTop');
    var oTop = $('#interiorline').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('#interiorline').append('<svg xmlns="http://www.w3.org/2000/svg" width="1440.861" height="164.833" viewBox="0 0 1440.861 164.833"><defs><style>.line3{fill:none;stroke:#d6b874;stroke-width:2px;}</style></defs><path class="line3" d="M-15143.937,578.129l-.063,88.109v.437l151.408.03v71.861h-1.18l.444-71.861-150.961.473-208.48.884.146,66h-.765l.021-66-358.945-1.89.3,69.567h-.6V666.172h-358.922l-.063,70.339h-.857l-.024-70.339-358.977-1.5v77.289h-.8" transform="translate(16432.453 -578.129)"/></svg>')
       a = 1;
    }
});
</script> --}}