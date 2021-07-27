@extends('layouts.master')
@section('page-title')
Career
@endsection
@section('mainContent')
  <section>
    <div class="career-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="contact-one">
            <div class="rtl-slider-2">
              @foreach($secone as $row)
              <div class="rtl-slider-contact contact-slider{{$row->id}}">
                <div class="career-image-main">
                  <img src="/uploads/career/{{$row->image}}" alt="{{$row->title}}">
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="career-border"></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="career-info">
            <div class="contact-card">
                <div class="rtl-slider-nav-2">
                  @foreach($secone as $row)
                  <div class="rtl-slider-contact card-head ">
                    <h2>{{$row->title}}</h2>
                    <h3>{{$row->sub_title}}</h3>
                    <hr>
                    <p>{{$row->description}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
              
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section>
      <div class="real-career">
    <div class="container">
        <div class="stand-main-circle animatable fadeInDown">
          <div class="career-stand">
            @if($sectwoheading)
            <h2>{{$sectwoheading->title}}</h2>
            <p class="newcareer">{{$sectwoheading->sub_title}}</p>
            @endif
          </div>
            <div class="row">
              @if($sectwo)
              @foreach($sectwo as $row)
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="stand-box animatable fadeInDown">
                  <img src="/uploads/career/{{$row->image}}" alt="{{$row->title}}">
                  <h5>{{$row->title}}</h5>
                  <p>{{$row->description}}</p>
                </div>
              </div>
              @endforeach
              @endif
            </div>
        </div>
      </div>
    </div>
  </section>
   <section>
     <div class="container">
       <div class="carrer-position">
        @if($activejob)
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-12">
             <div class="carrer-position-img  animatable fadeIn">
               <img src="/uploads/career/{{($secthree) ? $secthree->image : 'Empty'}}" alt="{{($secthree) ? $secthree->title : 'Empty'}}">
               {{-- <img src="/frontend/assets/img/hr.jpg" alt=""> --}}
             </div>
           </div>
           <div class="col-1 d-lg-block d-none p-0"></div>
           <div class="col-lg-5 col-md-6 col-sm-12">
             <div class="position-info animatable fadeInDown">
               <h3>{{($secthree) ? $secthree->title : 'Empty'}}</h3>
               <p>{{($secthree) ? $secthree->sub_title : 'Empty'}}</p>
              <select id="target" >
              <option value="0">Select...</option>
              @foreach($jobs as $job)
                <option value="content_{{$job->id}}">{{$job->title}}</option>
              @endforeach
              </select>
              @foreach($jobs as $job)
                <div id="content_{{$job->id}}" class="inv">
                  <div class="waiter-career">
                    <h3>{{$job->title}}</h3>
                    <p>Posted on :<span> {{$job->created_at}}</span></p>
                  </div>
                  <p>{{$job->description}}</p>
                  <div class="waiter-career">
                    <h6><i class="fas fa-map-marker-alt"></i>{{$job->location}}</h6>
                    <p>Open Positions : <span>{{$job->position}}</span></p>
                  </div>
                  <h6>Apply : <span> {{$job->email}}</span></h6>
                </div>
              @endforeach
             </div> 
           </div>
         </div>
         @endif
       </div>
     </div>
   </section>
   <section>
     <div class="container">
       <div class="careers-real animatable fadeInDown">
        @if($secfourheading)
         <h2>{{$secfourheading->title}}</h2>
         <p class="newcareerpera"> {{$secfourheading->sub_title}}</p>
        @endif
       </div>
         <div class="about-info">
        <div class="row">
          @if($secfour)
          @foreach($secfour as $row)
          <div class=" col-lg-4 col-md-4 col-sm-4">
            <div class="about-details animatable fadeInDown ">
              <img src="/uploads/career/{{$row->image}}" alt="">
                  <h5>{{$row->title}}</h5>
                  <p>{{$row->description}}</p>
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
        <div class="contact-details">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
              <div class="backshadow">
              <div class="visitus">
                <div class="modal11">
                <h5>VISIT US</h5>
                <p>{{ ($visit) ? $visit->address : null }}</p>
                <h6>{{ ($visit) ? $visit->phone : null }}</h6>
                <H5>{{ ($visit) ? $visit->title : null }}</H5>
                <p>{{ ($visit) ? $visit->description : null }}</p>
                <h6>{{ ($visit) ? $visit->email : null }}</h6>
                <div class="follow-section">
                <div class="social-icons mt-3 ">
                  <ul class="mb-0">
                    <?php
                      $links = new App\Models\SocialSettingLinks;
                      $link = $links::first();
                    ?>
                    @if($link) @if($link->facebook_status !='')
                    <li><a href="{{$link->facebook}}"><i class="fab fa-facebook-f facebook-2"></i></a></li>
                    @endif @endif
                    @if($link) @if($link->twitter_status !='')
                    <li><a href="{{$link->twitter}}"><i class="fab fa-twitter twitter"></i></a></li>
                    @endif @endif
                    @if($link) @if($link->instagram_status !='')
                    <li><a href="{{$link->instagram}}"><i class="fab fa-instagram instagram"></i></a></li>
                    @endif @endif
                    @if($link) @if($link->linkedin_status !='')
                    <li><a href="{{$link->linkedin}}"><i class="fab fa-linkedin linkedin"></i></a></li>
                    @endif @endif
                    @if($link) @if($link->whatsapp_status !='')
                    <li><a href="{{$link->whatsapp}}"><i class="fab fa-whatsapp whatsapp"></i></a></li>
                    @endif @endif
                  </ul>
                </div>
                </div>
              </div>
              </div>
              </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">
              &nbsp;
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <section>
              <div class="contact-foc">
               <h3>{{ ($question) ? $question->title : null}}</h3>
               <p>{{ ($question) ? $question->description : null}}</p>
               {{-- <p>Drop your resume here for the better future and exposure.</p> --}}
              </div>
          <!-- <div class="mls-contact-details"> -->
                <div class="form-back">
                  @if (\Session::has('success_contact'))
                    <div class="alert alert-success">
                      <p>{{ \Session::get('success_contact') }}</p>
                    </div><br />
                   @endif
                  <form method="post" action="/contactus">
                    @csrf
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{($contactform) ? $contactform->name : 'Empty'}}</label>
                          <input type="text" name="fullname" required="" class="form-control" placeholder="{{($contactform) ? $contactform->name : 'Empty'}}">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{($contactform) ? $contactform->email : 'Empty'}}</label>
                          <input type="email" name="email" required="" class="form-control" placeholder="{{($contactform) ? $contactform->email : 'Empty'}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{($contactform) ? $contactform->phone : 'Empty'}}</label>
                          <input type="phone" name="phone" required="" class="form-control" placeholder="{{($contactform) ? $contactform->phone : 'Empty'}}">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="exampleInputEmail1">{{($contactform) ? $contactform->subject : 'Empty'}}</label>
                          <div class="custom-select">
                          <select name="subject" required="">
                            <option>{{($contactform) ? $contactform->subject : 'Empty'}}</option>
                            <option value="$2500 to $3000">$2500 to $3000 </option>
                            <option value="$2500 to $3000">$2500 to $3000 </option>
                            <option value="$2500 to $3000">$2500 to $3000 </option>
                            <option value="$2500 to $3000">$2500 to $3000 </option>
                            <option value="$2500 to $3000">$2500 to $3000 </option>
                          </select>
                        </div>
                      </div>
                    </div>
                      <div class="form-group mb-0">
                        <label for="exampleFormControlTextarea1">{{($contactform) ? $contactform->description : 'Empty'}}</label>
                        <textarea class="form-control" name="description" required="" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your message here"></textarea>
                      </div>
                      <button type="submit" class="btn btn-light">{{($contactform) ? $contactform->submit : 'Empty'}}</button>
                    </div>
                  </form>
                  </div>
                  
          <!-- </div> -->

    </section>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

