@extends('layouts.master')
@section('page-title')
Consultancy
@endsection
@section('mainContent')
      <div id="carouselExampleDark" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators about-indicators">
          @foreach($secone as $row => $value)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$row}}" class="active" aria-current="true" aria-label="Slide {{$row}}"></button>
          @endforeach

        </div>
        <div class="carousel-inner">
          @foreach($secone as $row)
          <div class="carousel-item services-caro {{ $loop->first ? 'active' : '' }}" style="background-image: url('/uploads/consultancy/{{$row->image}}')">
           <div class="container">
            <div class="services-caro-info">
              <h5 class="fade-in-bottom">{{$row->title}}</h5>
              <h2 class="fade-in-bottom">{{$row->subtitle}}</h2>
              <p class="fade-bottom">{{$row->description}}</p>
              <img src="/frontend/assets/img/shape.png">
            </div>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev about-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next about-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="services-main">
        <div class="services-info">
          <h3>{{ ($sectwo) ? $sectwo->title : null}}</h3>
          <p>{{ ($sectwo) ? $sectwo->description : null}}</p>
        </div>

          <div class="row">
            <div class="services-tiles">
              <div class="row">
                @foreach($secthree as $row)
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <a href="{{$row->video}}" class=" video-popup mfp-iframe" data-lity>
                  <div class="newimgvideo" style="background-image: url(/uploads/home/{{$row->image}});">
                    <img src="/frontend/assets/img/play.png" alt="">
                    <h3>{{$row->title}}</h3>
                    <p>{{$row->description}}</p>
                  </div></a>
                 <div class="card scrollbar" id="style-1">
                <div class="card-body">
                    <!--Table-->
                    <table class="table table-responsive mb-0">
                        <!--Table body-->
                        <tbody>
                          @foreach($secthreedetail as $detail)
                          <?php //echo $detail->title ;die; ?>
                          @if($detail->business_id == $row->id)
                            <tr>
                                <td onclick="show_services(this.id)" id="{{$detail->id}}"><a href="#target_service-{{$detail->id}}"><h6>{{$detail->title}}</h6></a></td>
                                <td onclick="show_services(this.id)" id="{{$detail->id}}"> <a href="#target_service-{{$detail->id}}"><p>Read more</p></a></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
      <section>
    <div class="container" >
      @foreach($secthreedetail as $detail)
      <div class="table-content hideservice show-service-{{$detail->id}}">
        <h3 id="target_service-{{$detail->id}}">{{$detail->title}}</h3>
        <p>{{$detail->description}}</p>
      </div>
      @endforeach
    </div>
    </section>

@endsection