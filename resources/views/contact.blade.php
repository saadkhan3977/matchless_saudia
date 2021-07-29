@extends('layouts.master')
@section('page-title')
Contact Us
@endsection
@section('mainContent')

    <section>
      <div class="contact-back">
        <div class="container">
          <div class="contact-info">
            <h1>{{ ($contacts) ? $contacts->title : null}}</h1>
            <p>{{ ($contacts) ? $contacts->description : null}}</p>
          </div>
          <div class="mapmain">
            <iframe class="map" src="{{ ($contacts) ? $contacts->map_link : null}}"></iframe>
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
                <h5>{{ ($visit) ? $visit->title : null }}</h5>
                <p>{{ ($visit) ? $visit->address : null }}</p>
                <h6>{{ ($visit) ? $visit->phone : null }}</h6>
                <H5>{{ ($visit) ? $visit->description : null }}</H5>
                <p></p>
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
              </div>

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
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->name : null}}</label>
                          {{-- <label for="exampleInputEmail1">Your Name</label> --}}
                          <input type="text" name="fullname" required="" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->email : null}}</label>
                          {{-- <label for="exampleInputEmail1">Your Email</label> --}}
                          <input type="email" name="email" required="" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group mb-0">
                          <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->phone : null}}</label>
                          {{-- <label for="exampleInputEmail1">Your Phone</label> --}}
                          <input type="phone" name="phone" required="" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="exampleInputEmail1">{{ ($contactform) ? $contactform->subject : null}}</label>
                        {{-- <label for="exampleInputEmail1">Your Subject</label> --}}
                          <div class="custom-select">
                          <select name="subject" required="">
                            <option>Select Your Field</option>
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
                        <label for="exampleFormControlTextarea1">{{ ($contactform) ? $contactform->description : null}}</label>
                        {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
                        <textarea class="form-control" name="description" required="" id="exampleFormControlTextarea1" rows="3" ></textarea>
                      </div>
                      <button type="submit" class="btn btn-light">{{ ($contactform) ? $contactform->submit : null}}</button>
                      {{-- <button type="submit" class="btn btn-light">submit</button> --}}
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