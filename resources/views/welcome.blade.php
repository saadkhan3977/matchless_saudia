@extends('layouts.master')
@section('page-title')
  Home
@endsection
@section('mainContent')
      <div class="mls-home-back">
        @if (\Session::has('success_contact'))
        <div class="alert alert-success" id="successMessage">
          <p>{{ \Session::get('success_contact') }}</p>
        </div><br />
        @endif
        <video src="/uploads/home/{{ ($videodata) ? $videodata->background_video : null}}" playsinline autoplay muted loop id="bgvideo"></video>
        <div class="container">
          <div class="home-main-content">
           <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="home-info">
                <h6>{{ ($videodata) ? $videodata->title : null}}</h6>
                <p>{{ ($videodata) ? $videodata->sub_title : null}}</p>
                <hr>
                <h2>{{ ($videodata) ? $videodata->description : null}}</h2>
                <a href="#"><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ ($videodata) ? $videodata->button_text : null }}</button></a>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header" >
                        <button type="button" style="float: left;" class="btn-close newmodal" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                        <h5 class="modal-title"  style="float: right;" id="exampleModalLabel">{{ ($videodata) ? $videodata->button_text : null }}</h5>
                      </div>
                      <div class="modal-body">
                        <div class="form-back modal-form">
                          
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
                <img src="/frontend/assets/img/shape.png">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="about-wrapper">
                <div class="video-main">
                  <div class="promo-video">
                    <div class="waves-block">
                      <div class="about-waves wave-1"></div>
                      <div class="about-waves wave-2"></div>
                      <div class="about-waves wave-3"></div>
                    </div>
                  </div>
                  <a href="{{ ($videodata) ? $videodata->video_url : null }}" class="about-video video-popup mfp-iframe" data-lity><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="thumbnail-back ">
        <div class="container" >
          <div class="thumbnail-info mb-lg-5 animatable fadeInDown">
          <h3>{{ ($homehospitalityconsultancy) ? $homehospitalityconsultancy->title : null }}</h3>
          <p>{{ ($homehospitalityconsultancy) ? $homehospitalityconsultancy->description : null }}</p>
          <hr>
          </div>
          <br>
          <div class="row">
            <div class="tiles">
              <div class="row">
                @foreach($sectwo as $row)
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <a href="{{$row->video}}" class=" video-popup mfp-iframe" data-lity>
                  <div class="newimgvideo animatable fadeInDown" style="background-image: url(/uploads/home/{{$row->image}});">
                    <img src="/frontend/assets/img/play.png" alt="">
                    <h3>{{$row->title}}</h3>
                    <p>{{$row->description}}</p>
                  </div></a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section > 
      <div class="container">
        <div class="mls-project">
          <h3>{{ ($homwproject) ? $homwproject->title : null }}</h3>
          <p>{{ ($homwproject) ? $homwproject->description : null }}</p>
          <hr class="mls-hr">
        </div>
      </div>
      &nbsp;
      <div class="container-fliud">
     <div class="container">
       <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="border-cero">&nbsp;</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="right-back">&nbsp;</div>
        </div>
       </div> 
     </div>
       <div class="owl-slider">
        <div id="carousel" class="owl-carousel slider-custom" style="height: 400px;">
          <?php $id=1 ?>
          @if($projects)
          @foreach($projects as $row)
          <div class="item c-item" style="background-image: url(uploads/project/{{$row->image}});" id="cero-{{$id++}}">
            <a href="{{$row->video}}" class=" video-popup mfp-iframe" data-lity>
            <div class="cero-info">
              {{-- <img src="/frontend/assets/img/play.png"> --}}
            </div></a>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="cero-logo">
                <img src="/uploads/project/{{$row->logo}}">
                {{-- <p>{{$row->description}}</p> --}}
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="cero-btn">
                <a href="/projects/{{preg_replace('~[^\pL\d]+~u', '-', $row->title)}}"><button type="button" class="btn btn-outline-light social">Read More</button></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endif
          
        </div>
        </div>
      </div>
    </section>
    <section>
      <div class="mls-mission">
        <div class="container">
         <div class="mls-mission-info animatable fadeInDown" >
          <h3>{{ ($homemissions) ? $homemissions->title : null }}</h3>
          <p>{{ ($homemissions) ? $homemissions->description : null }}</p>
          <hr class="mls-hr">
         </div> 
         <div class="mission-main ">
           <div class="row">
             @foreach($homemissionsfeatures as $roww)
               <div class="col-lg-6 col-md-6 col-sm-6">
                 <div class="mission-details animatable fadeInDown">
                   <img src="/uploads/home/{{$roww->image}}" alt="{{$roww->title}}">
                 <h5>{{$roww->title}}</h5>
                 <p>{{$roww->description}}</p>
                 </div>
               </div>
             @endforeach
           </div>
         </div>
        </div>
      </div>
    </section>
    <section>
      <div class="mls-contact-main">
        <div class="container">
          <div class="mlscontact-info animatable fadeInDown" >
           <h3>{{ ($contacts) ? $contacts->title : null}}</h3>
           <p>{{ ($contacts) ? $contacts->description : null}}</p>
          </div>
          <div class="mls-contact-details">
            <div class="row">
              <div class="col-lg-5 col-md-6">
                <div class="contact-map">
                  <iframe src="{{ ($contacts) ? $contacts->map_link : null}}"></iframe>
                </div>
              </div>
              <div class="col-lg-7 col-md-6">
                <div class="form-back animatable fadeInDown">
                   @if (\Session::has('success_contact'))
                <div class="alert alert-success"  id="successMessage">
                  <p>{{ \Session::get('success_contact') }}</p>
                </div><br />
               @endif
                  <form method="post" action="/contactus">
                    @csrf
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->name : null}}</label>
                          <input type="text" name="fullname" required="" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->email : null}}</label>
                          <input type="email" name="email" required="" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->phone : null}}</label>
                          <input type="phone" name="phone" required="" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->subject : null}}</label>
                          <div class="custom-select">
                          <select name="subject" required="">
                            <option>Select Your Field</option>
                            <option value="">Empty</option>
                          </select>
                        </div>
                      </div>
                    </div>
                      <div class="form-group mb-0">
                        <label for="exampleFormControlTextarea1">{{ ($contactform) ? $contactform->description : null}}</label>
                        <textarea class="form-control" name="description" required="" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-light">{{ ($contactform) ? $contactform->submit : null}}</button>
                    </div>
                  </form>
               </div>
              </div>
          </div>
        </div>
            <div class="banner__arrow" id="svgj">
            </div>
      </div>
    </section>

    @endsection

