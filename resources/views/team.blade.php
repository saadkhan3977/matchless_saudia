@extends('layouts.master')
@section('page-title')
About
@endsection
@section('mainContent')
    <section>
      <div class="container">
        <div class="gallery-head">
          <h2>{{ ($teamtitles) ? $teamtitles->title : null}}</h2>
        </div>
      </div>
    </section>


    <section>
      <div class="container">
    <div class="team-images mt-5">
          <div class="row">
            @if($teams)
            @foreach($teams as $team)
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="grid imggrid">
                <figure class="effect-sadie">
                  <img src="/uploads/team/{{$team->image}}" alt="{{$team->title}}">
                  <figcaption>
                    <h6>{{$team->title}}</h6>
                    <p>{{$team->position}}</p>
                    <div class="about-icon">
                      <a href="{{$team->facebook_link}}" class="facebook"><i class="fab fa-facebook-f"></i></a> 
                      <a href="#" class="twitter"><i class="fab fa-twitter"></i></a> 
                      <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <a href="#">View more</a>
                  </figcaption>     
                </figure>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        <div class="gallery-btn">
            <a href="{{ url()->previous() }}"><button type="button" class="btn btn-outline-light">Back</button></a>
          </div>
        </div>
      </div>
    </section>
      
     <br><br>
@endsection