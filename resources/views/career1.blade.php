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
        <div class="stand-main-circle">
          <div class="career-stand  animatable fadeInDown">
            @if($sectwoheading)
            <h2>{{$sectwoheading->title}}</h2>
            <p class="newcareer">{{$sectwoheading->sub_title}}</p>
            @endif
          </div>
            <div class="row">
              @if($sectwo)
              @foreach($sectwo as $row)
              <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="stand-box">
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
             <div class="carrer-position-img">
               <img src="/uploads/career/{{($secthree) ? $secthree->image : 'Empty'}}" alt="{{($secthree) ? $secthree->title : 'Empty'}}">
             </div>
           </div>
           <div class="col-1 d-lg-block d-none p-0"></div>
           <div class="col-lg-5 col-md-6 col-sm-12">
             <div class="position-info">
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
       <div class="careers-real">
        @if($secfourheading)
         <h2>{{$secfourheading->title}} <br><span>{{$secfourheading->sub_title}}</span></h2>
        @endif
         <div class="about-info">
        <div class="row">
          @if($secfour)
          @foreach($secfour as $row)
          <div class=" col-lg-4 col-md-4 col-sm-4">
            <div class="about-details ">
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
               <h3>Send Your Questions</h3>
               <p>{{ ($question) ? $question->description : null}}</p>
               
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
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
    
 {{--    <footer>
      <div class="footer-main">
        <div class="container max-con">
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6">
              <div class="digi-section">
                <div class="digi-logo">
                  <a href="/"><img src="/frontend/assets/img/footer.png" alt="Logo"></a>
                </div>
                <div class="footer-content">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="custom-digi">
                        <h4>Contact US</h4>
                        <p><span>Email : </span>info@matchlesssaudia.com</p>
                        <p><span>Phone : </span>+966 554 883 2032</p>
                      </div>
                      <div class="follow-section">
                    <div class="social-icons mt-3">
                      <ul>
                        <li><a href="https://www.facebook.com/matchlesssaudia/"><i class="fab fa-facebook-f facebook-2"></i></a></li>
                        <li><a href="https://twitter.com/SaudiaMatchless"><i class="fab fa-twitter twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/matchlesssaudia/"><i class="fab fa-instagram instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/matchless-saudia/"><i class="fab fa-linkedin linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCAkOMUwxaf7k20tgwkVWxKw" class="youtube"><i class="fab fa-youtube"></i></a></li>
                      </ul>
                    </div>
                  </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                      <div class="site-main">
                        <h5>Site Map</h5>
                        <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="aboutus.html">About Us</a></li>
                          <li><a href="career.html">Careers</a></li>
                          <li><a href="contact.html">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                      <div class="site-main">
                        <h5>Our Projects</h5>
                        <ul>
                          <li><a href="/">0-Kazu</a></li>
                          <li><a href="#">Dekan Chapati</a></li>
                          <li><a href="#">Amaly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
              <div class="subscribe-scetion">
                <form>
                  <label>Subscribe our Newsletter</label>
                  <div class="input-group input-main">
                    <input type="email" required="" class="form-control border-right-0" placeholder="Email">
                    <span class="input-group-append custom-input">
                    <a href="#"><button type="submit" class="btn border-left-0" ><i class="fas fa-arrow-right"></i></button></a>
                    </span>
                  </div>
                </form>
                <div class="site-map">
                  <div class="row">
                    <div class="col-12">
                      <div class="site-main">
                        <h5>Help</h5>
                        <ul>
                          <li>Faq's</li>
                          <li>Terms and condition</li>
                          <li>Privacy Policy</li>
                          <li>Blog</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="footer-hr">
      <div class="container">
        <div class="copyrights">
          <div class="row">
            <div class="col-12">
              <div class="term-text">
                <p>Copyright © 2021 Matchlesssaudia (Pvt. ltd)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
     
 
<script src="/frontend/assets/js/jquery.min.js"></script>
  <script src="/frontend/assets/js/popper.min.js"></script>
  <script src="/frontend/assets/js/script.js"></script>
    <script src="/frontend/assets/js/career.js"></script>
  <script src="/frontend/assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="/frontend/assets/js/lity.min.js"></script>
     <script src="/frontend/assets/js/slick.min.js"></script>
    <script src="/frontend/assets/js/gsap.min.js"></script>
  <script src="/frontend/assets/js/index.js"></script>              
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

   {{--  <script src="/frontend/assets/js/jquery.min.js"></script>
    <script src="/frontend/assets/js/popper.min.js"></script>
    <script src="/frontend/assets/js/script.js"></script>
    <script src="/frontend/assets/js/career.js"></script>
    <script src="/frontend/assets/js/bootstrap.min.js"></script>
    <script src="/frontend/assets/js/lity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
    
    </body>
</html>


 --}}