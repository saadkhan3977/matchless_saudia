@extends('layouts.master')
@section('page-title')
Blog
@endsection
@section('mainContent')
<section>
      <div class="blog-main" style="background-image: url(/uploads/blog/{{($blogpage) ? $blogpage->image : null}});">
        <h2>{{($blogpage) ? $blogpage->title : null}}</h2>
      </div>
    </section>
  
    <section>
      <div class="container">
        <div class="blog-main-content">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            @if($blogs)
            @foreach($blogs as $blog)
            <div class="blog-info">
              <img src="/uploads/blog/{{$blog->image}}" alt="{{$blog->title}}">
              <p>
                {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('Y-M-d')}} 
                <?php 
                $blogdata = new App\Models\Blog;
                $category = $blogdata::find($blog->id)->category; 
                ?>
                {{$category->title}}
              </p>
              <h3>{{$blog->title}}</h3>
              <p>{{$blog->description}}</p>
              <div class="row">
                <div class="col-6">
                  <a href="/blog/{{Str::slug($blog->title,'-')}}"><button type="button" class="btn btn-link"><?php echo ($blog->lang=='en') ? 'READ MORE' : 'قراءة المزيد' ; ?> <i class="fas fa-arrow-right"></i></button></a>
                </div>
                <div class="col-6">
                  <div class="bloginside__share">
                    <p><span>Share :</span><span><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-vimeo-v"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a></span></p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endif
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
                  @if($categories)
                  @foreach($categories as $row)
                  <a href="#">
                    <li>{{$row->title}}</li>
                  </a>
                  @endforeach
                  @endif
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
              {!! $blogs->links('pagination') !!}
      </div>
      </div>
    </section>
@endsection