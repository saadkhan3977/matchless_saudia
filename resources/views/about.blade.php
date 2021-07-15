@extends('layouts.master')
@section('page-title')
About
@endsection
@section('mainContent')

<section>
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
        <div class="carousel-indicators about-indicators">
          @if(!empty(json_decode($secone)))
          <?php $id='1' ?>
          @foreach($secone as $row => $value)
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$row}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{$row + '1'}}"></button>
          @endforeach
          @endif
        </div>
        <div class="carousel-inner">
          @if(!empty(json_decode($secone)))
          @foreach($secone as $row)
          <div class="carousel-item about-caro @if($loop->first) active @endif" style="background-image: url(/uploads/about/{{$row->image}});">
           <div class="container">
            <div class="about-caro-info">
              <h2>{{$row->title}}</h2>
              <p>{{$row->description}}</p>
              <a href="{{$row->link}}"><button type="button" class="btn btn-light">{{$row->description}}</button></a>
              <img src="/frontend/assets/img/shape.png">
            </div>
            </div>
          </div>
          @endforeach
          @else
          <div class="carousel-item about-caro active">
           <div class="container">
            <div class="about-caro-info">
              <h2>Empty</h2>
              <a href="#"><button type="button" class="btn btn-light">Empty</button></a>
              <img src="/uploads">
            </div>
            </div>
          </div>
          @endif
        </div>
        <button class="carousel-control-prev about-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next about-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="about-info">
        <div class="row">
          @if(!empty(json_decode($sectwo)))
          @foreach($sectwo as $row => $value)
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="about-details">
              <img src="/uploads/about/{{$value->image}}">
              <h6>{{$value->title}}</h6>
              <p>{{$value->description}}</p>
            </div>
          </div>
          @endforeach
          @endif
        </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="about-speck">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="about-speck-info">
               <div class="about-play-btn">
                <div class="video-main">
                  <div class="promo-video">
                  </div>
                  <a href="{{($secthree) ? $secthree->video_url : null}}" class="about-play video-popup mfp-iframe" data-lity><i class="fa fa-play"></i></a>
                </div>
              </div>
              <img src="/uploads/about/{{($secthree) ? $secthree->image : null }}">  
              </div>
            </div>
            <div class="col-1">
              &nbsp;
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
              <div class="about-speck-details">
                <h6>{{($secthree) ? $secthree->heading : null}}</h6>
                <h3>{{($secthree) ? $secthree->title : null}}</h3>
                <p>{{($secthree) ? $secthree->description : null}}</p>
                <br><br-lg>
                <h5>{{($secthree) ? $secthree->sub_title : null}}</h5>
                <p>{{($secthree) ? $secthree->sub_description : null}}</p>
                <button type="button" class="btn btn-light">FREE CONSULTATION</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="back-whole"></div> -->
    </section>
    <section>
      <div class="schedule-back">
        <div class="container">
          <div class="schedule-info">
            <h3>{{($secfourheading) ? $secfourheading->title : null}}</h3>
            <p>{{($secfourheading) ? $secfourheading->description : null}}</p>
             <div class="owl-carousel my-carousel about-owl">
              @foreach($events as $row)
              <div class="my-carousel-item">
                <div class="about-owl-info ">
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                      <img src="/uploads/blog/{{$row->image}}">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                      <h5>{{$row->title}}</h5>
                      {{-- <h6>{{$row->start_date}}, {{$row->start_time}} - {{$row->end_date}}, {{$row->end_time}}</h6> --}}
                      <p>{{$row->description}}</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 caroflx">
                      <a href="/blog/{{Str::slug($row->title,'-')}}"><button type="button" class="btn btn-light">READ MORE</button></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
        <div class="container">
          <div class="team-info">
           <h3>{{($secfiveheading) ? $secfiveheading->title : null}}</h3>
            <p>{{($secfiveheading) ? $secfiveheading->description : null}}</p>
          </div>
          <div class="team-images">
          <div class="row">
            @if($teams)
            @foreach($teams as $team)
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="grid bounceIn">
                <figure class="effect-sadie">
                  <img src="/uploads/team/{{$team->image}}">
                  <figcaption>
                    <h6>{{$team->title}}</h6>
                    <p>{{$team->position}}</p>
                    <div class="about-icon">
                      <a href="{{$team->facebook_link}}" class="facebook"><i class="fab fa-facebook-f"></i></a> 
                      <a href="{{$team->twitter_link}}" class="twitter"><i class="fab fa-twitter"></i></a> 
                      <a href="{{$team->linkedin_link}}" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>
                    {{-- <a href="#">View more</a> --}}
                  </figcaption>     
                </figure>
              </div>
            </div>
            @endforeach
            @endif
          </div>
          <div class="gallery-btn">
            <a href="/team"><button type="button" class="btn btn-outline-light">View All</button></a>
          </div>
        </div>
        </div>
    </section>
    <section>
      <div class="container">
        <div class="ceomass">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="ceo-info">
                <h2>{{($secsix) ? $secsix->title : null}}</h2>
                <p>{{($secsix) ? $secsix->description : null}}</p>
                <br><br>
                <h6>{{($secsix) ? $secsix->sub_title : null}}</h6>
                <p>{{($secsix) ? $secsix->sub_description : null}}</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="ceoimage">
                <img src="/uploads/about/{{($secsix) ? $secsix->image : null}}" >
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="about__arrow" id="aboutline">
          </div>
    </section>
    <section>
      <div class="container max-con">
        <div class="our-gallery">
          <h3>{{($galleryheading) ? $galleryheading->title : null}}</h3>
          <p>{{($galleryheading) ? $galleryheading->description : null}}</p>
          <br>
          <div class="row">
              <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
  <div class="cont">
  <div class="demo-gallery">
    <ul id="lightgallery">
      @if($gallerys)
      <?php $id='1' ?>
      @foreach($gallerys as $row)
      @if($id++ < '9')
      <article data-responsive="/uploads/gallery/{{$row->image}} 375, assets/img/NoPath.png 480, assets/img/NoPath.png 800" data-src="/uploads/gallery/{{$row->image}}">
        <div class="box">
        <a href="">
          <div class="relative">
            <!-- <img src="/uploads/gallery/{{$row->image}}"> -->
          <img class="img-responsive" src="/uploads/gallery/{{$row->image}}">
          <div class="rotated"></div>
          </div>
        </a>
      
        </div>
    </article>
    @endif
    @endforeach
    @endif
        
    </ul>
  </div>
</div>
    </section>
            <!--div> -->
          </div>
          <div class="gallery-btn">
            <a href="/gallery"><button type="button" class="btn btn-outline-light">Read More</button></a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="profile-main-back">
        <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="false">
          <div class="carousel-inner">
            @if($testimonials)
            @foreach($testimonials as $row)
            <div class="carousel-item @if($loop->first) active @endif">
              <div class="profile-info">
                <img src="/uploads/testimonial/{{$row->image}}">
                <p>{{$row->description}}</p>
                <h5>{{$row->title}}</h5>
                <h6>Client</h6>
              </div>
            </div>
            @endforeach
            @endif
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
      </div>
    </section>
    <section>
		  <div class="container max-con">
			<div class="freshnews">
			  <h4>{{($aboublog) ? $aboublog->title : null}}</h4>
		      <p>{{($aboublog) ? $aboublog->description : null}}</p>
			</div>
			<div class="freshblog">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog-box">
							<img src="/frontend/assets/img/gallery2.png">
							<div class="box-info">
							  <h5>Changing Your Vision of Today's Possible Profits</h5>
							  <button type="button" class="btn btn-light">READ MORE</button>
							  <div class="row">
	                <div class="col-6">
	                  <p>By : Digitalopment</p>
	                </div>
	                <div class="col-6" align="right">
	                  <p><img src="/frontend/assets/img/clock.png" alt=""> 12 Dec 2020</p>
	                </div>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog-box">
							<img src="/frontend/assets/img/gallery2.png">
							<div class="box-info">
							  <h5>Changing Your Vision of Today's Possible Profits</h5>
							  <button type="button" class="btn btn-light">READ MORE</button>
							  <div class="row">
				                <div class="col-6">
				                  <p>By : Digitalopment</p>
				                </div>
				                <div class="col-6" align="right">
				                  <p><img src="/frontend/assets/img/clock.png" alt=""> 12 Dec 2020</p>
				                </div>
				              </div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog-box">
							<img src="/frontend/assets/img/gallery2.png">
							<div class="box-info">
							  <h5>Changing Your Vision of Today's Possible Profits</h5>
							  <button type="button" class="btn btn-light">READ MORE</button>
							  <div class="row">
				                <div class="col-6">
				                  <p>By : Digitalopment</p>
				                </div>
				                <div class="col-6" align="right">
				                  <p><img src="/frontend/assets/img/clock.png" alt=""> 12 Dec 2020</p>
				                </div>
				              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	   </div>
    </section>
    

@endsection