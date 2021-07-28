@extends('layouts.master')
@section('page-title')
About
@endsection
@section('mainContent')

<section>
      <div id="carouselExampleDark" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators about-indicators">
          @if(!empty(json_decode($secone)))
          <?php $id='1' ?>
          @foreach($secone as $row => $value)
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$row}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{$id++}}"></button>
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
              <a href="#"><button type="button" class="btn btn-light fade-bottom" data-bs-toggle="modal" data-bs-target="#exampleModal">{{$row->link_text}}</button></a>
              <img src="/frontend/assets/img/shape.png">
            </div>
            </div>
          </div>
          @endforeach
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{$row->link_text}}</h5>
                  <button type="button" class="btn-close newmodal" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                  <div class="form-back modal-form">
                    @if (\Session::has('success_contact'))
                    <div class="alert alert-success">
                      <p>{{ \Session::get('success_contact') }}</p>
                    </div><br />
                   @endif
                  <form method="post" action="/contactus">
                    @csrf
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->name : null}} *</label>
                          <input type="text" class="form-control" name="name" required="">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->email : null}} *</label>
                          <input type="email" class="form-control" name="email" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->phone : null}} *</label>
                          <input type="number" class="form-control" name="phone" required="">
                        </div>
                      </div>
                    </div>
                      <div class="form-group mb-0">
                        <label for="exampleFormControlTextarea1">{{ ($contactform) ? $contactform->description : null}}</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                      </div>
                      <button type="submit" class="btn btn-light">{{ ($contactform) ? $contactform->submit : null}}</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
          @endif
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
      {{-- <div id="carouselExampleDark" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
        <div class="carousel-indicators about-indicators">
          @if(!empty(json_decode($secone)))
          <?php $id='1' ?>
          @foreach($secone as $row => $value)
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$row}}" class="@if($loop->first) active @endif" aria-current="true" aria-label="Slide {{$id++}}"></button>
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
              <a href="#"><button type="button" class="btn btn-light fade-bottom" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$row->id}}">{{$row->link_text}}</button></a>
              <img src="/frontend/assets/img/shape.png">
            </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal-{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{$row->link_text}}</h5>
                  <button type="button" class="btn-close newmodal" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                  <div class="form-back modal-form">
                    @if (\Session::has('success_contact'))
                    <div class="alert alert-success">
                      <p>{{ \Session::get('success_contact') }}</p>
                    </div><br />
                   @endif
                  <form method="post" action="/contactus">
                    @csrf
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->name : null}} *</label>
                          <input type="text" class="form-control" name="name" required="">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->email : null}} *</label>
                          <input type="email" class="form-control" name="email" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->phone : null}} *</label>
                          <input type="number" class="form-control" name="phone" required="">
                        </div>
                      </div>
                    </div>
                      <div class="form-group mb-0">
                        <label for="exampleFormControlTextarea1">{{ ($contactform) ? $contactform->description : null}}</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                      </div>
                      <button type="submit" class="btn btn-light">{{ ($contactform) ? $contactform->submit : null}}</button>
                    </div>
                  </form>
                </div>
              </div>
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
        <button class="carousel-control-prev about-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next about-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> --}}
      
    </section>
    <section>
      <div class="container">
        <div class="about-info">
        <div class="row">
          @if(!empty(json_decode($sectwo)))
          @foreach($sectwo as $row => $value)
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="about-details animatable fadeInDown">
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
              <div class="about-speck-info animatable fadeIn">
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
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">{{($secthree) ? $secthree->button_text : null}}</button>
                {{-- <button type="button" class="btn btn-light">FREE CONSULTATION</button> --}}
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
          <div class="schedule-info animatable fadeInDown">
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
{{-- <section>
        <div class="container">
          <div class="team-info animatable fadeInDown">
            <h3>Our Team</h3>
            <p>Meet tha team!<br> Mix of geeks and very creative people.</p>
          </div>
          <div class="team-images ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="grid animatable fadeInDown">
                <figure class="effect-sadie">
                  <img src="/frontend/assets/img/pro.jpg">
                  <figcaption>
                    <h6>Coming soon</h6>
                    <p>CEO</p>
                    <div class="about-icon">
                       <a href="https://www.facebook.com/matchlesssaudia/" class="facebook"><i class="fab fa-facebook-f"></i></a> 
                        <a href="https://twitter.com/SaudiaMatchless" class="twitter"><i class="fab fa-twitter"></i></a> 
                        <a href="https://www.linkedin.com/company/matchless-saudia/" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <!-- <a href="#"></a> -->
                  </figcaption>     
                </figure>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="grid animatable fadeInDown">
                <figure class="effect-sadie">
                  <img src="/frontend/assets/img/pro.jpg">
                  <figcaption>
                    <h6>Coming soon</h6>
                    <p>CEO</p>
                    <div class="about-icon">
                       <a href="https://www.facebook.com/matchlesssaudia/" class="facebook"><i class="fab fa-facebook-f"></i></a> 
                        <a href="https://twitter.com/SaudiaMatchless" class="twitter"><i class="fab fa-twitter"></i></a> 
                        <a href="https://www.linkedin.com/company/matchless-saudia/" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <!-- <a href="#"></a> -->
                  </figcaption>     
                </figure>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="grid animatable fadeInDown">
                <figure class="effect-sadie">
                  <img src="/frontend/assets/img/pro.jpg">
                  <figcaption>
                    <h6>Coming soon</h6>
                    <p>CEO</p>
                    <div class="about-icon">
                       <a href="https://www.facebook.com/matchlesssaudia/" class="facebook"><i class="fab fa-facebook-f"></i></a> 
                        <a href="https://twitter.com/SaudiaMatchless" class="twitter"><i class="fab fa-twitter"></i></a> 
                        <a href="https://www.linkedin.com/company/matchless-saudia/" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <!-- <a href="#"></a> -->
                  </figcaption>     
                </figure>
              </div>
            </div>
          </div>
        <div class="gallery-btn">
            <a href="team.html"><button type="button" class="btn btn-outline-light">View All</button></a>
          </div>
        </div>
        </div>
    </section> --}}
    <section>
        <div class="container">
          <div class="team-info animatable fadeInDown">
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
              <div class="ceo-info animatable fadeInDown">
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
      <div class="container">
        <div class="our-gallery ">
          <h3>OUR GALLERY</h3>
          <p>Welcome to MLS!<br> This is our gallery check it out. </p>
          <br>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid-2">
  <div class="cont">
  <div class="demo-gallery">
    <ul id="lightgallery">
      @if($gallerys)
      <?php $id='1' ?>
      @foreach($gallerys as $row)
      @if($id++ < '7')
    <article data-responsive="/uploads/gallery/{{$row->image}} 375, /uploads/gallery/{{$row->image}} 480, /uploads/gallery/{{$row->image}} 800" data-src="/uploads/gallery/{{$row->image}}">
        <div class="box animatable fadeInDown">
        <a href="">
          <div class="relative">
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
            </div>
          </div>
          <div class="gallery-btn">
            <a href="/gallery"><button type="button" class="btn btn-outline-light">View All</button></a>
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
			<div class="freshnews animatable fadeInDown">
			  <h4>{{($aboublog) ? $aboublog->title : null}}</h4>
		      <p>{{($aboublog) ? $aboublog->description : null}}</p>
			</div>
			<div class="freshblog animatable fadeInDown">
				<div class="row">
					@if($blogs)
          <?php $id =1?>
          @foreach($blogs as $blog)
          @if($id ++ < '4')
          <div class="col-lg-4 col-md-4 col-sm-6">
						<div class="blog-box">
							<img src="/uploads/blog/{{$blog->image}}">
							<div class="box-info">
							  <h5>{{$blog->title}}</h5>
							  <a href="/blog/{{Str::slug($blog->title,'-')}}"><button type="button" class="btn btn-light"> <?php echo ($blog->lang=='en') ? 'READ MORE' : 'قراءة المزيد' ; ?></button></a>
							  <div class="row">
	                <div class="col-6">
	                  <p><?php echo ($blog->lang== 'en') ? 'By' : 'بواسطة' ; ?> : {{$blog->company}}</p>
	                </div>
	                <div class="col-6" align="right">
	                  <p><img src="/frontend/assets/img/clock.png" alt=""> {{$blog->created_at}}</p>
	                </div>
	              </div>
							</div>
						</div>
					</div>
					@endif
          @endforeach
          @endif
				</div>
			</div>
    	   </div>
    </section>
    

@endsection