@extends('layouts.master')
@section('page-title')
{{$blog->title}}
@endsection
@section('mainContent')

    <section>
      <div class="blog-main">
        <h2>specific topic</h2>
      </div>
    </section>
  
    <section>
      <div class="container">
        <div class="blog-main-content">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="blog-info">
              <img src="/frontend/assets/img/blog-content.png" alt="">
              <p>
                {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('Y-M-d')}} 

                {{$category->title}}
              </p>
              <h3>{{$blog->title}}</h3>
              <p>{{$blog->description}}</p>
              {!!$blog->content!!}
              
              <div class="row">
                <div class="col-6">
                    {{-- <img src="/frontend/assets/img/bookmark.png" alt=""> --}}
                  @if($blog->keyword)
                  <?php 
                  $blogtags = new App\Models\BlogTags;
                  ?>
                  @foreach(json_decode($blog->keyword) as $key => $value)
                    <?php $tags = $blogtags::where('id',$value)->get() ?>
                    @foreach($tags as $row)
                    <a href="#"><button type="button" class="btn btn-link"><span class="bookmark-inside">
                    </span>{{$row->title}} ,</button></a>
                    @endforeach

                  @endforeach
                  @endif
                </div>
                
              </div>
            </div>
            <hr>
          </div>
          <div class="col-lg-4 col-md-4 d-lg-block d-md-block d-none">
            <div class="blog__sidebar">
              <div class="blog-info">
              <img src="/frontend/assets/img/blog-content.png" alt="">
              <h5>HOLIDAYS ON A SAILING BOAT? SIMPLE!</h5>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
              <br>
               <div class="sidebar__categories">
                <h3>Categories</h3>
                <br>
                <ul>
                  <a href="#">
                    <li>Fashion</li>
                  </a>
                  <a href="#">
                    <li>gaming</li>
                  </a>
                  <a href="#">
                    <li>food for thought</li>
                  </a>
                  <a href="#">
                    <li>uncategorized</li>
                  </a>
                  <a href="#">
                    <li>orderpak vendors</li>
                  </a>
                  <a href="#">
                    <li>wireframing</li>
                  </a>
                </ul>
              </div>
              <br>
               <h3>Latest Posts</h3>
               <br>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="side__image">
                    <img src="/frontend/assets/img/latest.png">
                  </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 p-0">
                  <div class="side__info">
                    <p>Feb 6, 2020 / Surfing</p>
                    <a href="#">
                      <h6>A HISTORY OF THE ANCIENT HAWAIIAN SPORT</h6>
                    </a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="side__image">
                    <img src="/frontend/assets/img/latest.png">
                  </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 p-0">
                  <div class="side__info">
                    <p>Feb 6, 2020 / Surfing</p>
                    <a href="#">
                      <h6>A HISTORY OF THE ANCIENT HAWAIIAN SPORT</h6>
                    </a>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="side__image">
                    <img src="/frontend/assets/img/latest.png">
                  </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 p-0">
                  <div class="side__info">
                    <p>Feb 6, 2020 / Surfing</p>
                    <a href="#">
                      <h6>A HISTORY OF THE ANCIENT HAWAIIAN SPORT</h6>
                    </a>
                  </div>
                </div>
              </div>
              <br><br>
              <h3>Latest Events</h3>
              &nbsp;
              <img src="/frontend/assets/img/event.png" alt="">
              &nbsp;
              <img src="/frontend/assets/img/event.png" alt="">
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
@endsection