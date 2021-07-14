@extends('layouts.master')
@section('page-title')
{{$blog->title}}
@endsection
@section('mainContent')

    <section>
      <div class="blog-main" style="background-image: url(/uploads/blog/{{$blog->bg_image}});">
        <h2>{{$blog->title}}</h2>
      </div>
    </section>
  
    <section>
      <div class="container">
        <div class="blog-main-content">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
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
              {!!$blog->content!!}
              
              <div class="row">
                <div class="col-6">
                  <div class="blogtag">
                  <span><img src="/frontend/assets/img/bookmark.png" alt=""></span>
                  @foreach($tags as $tag )
                  @foreach(json_decode($blog->keyword) as $key => $value)
                  @if($value == $tag->id)
                  <a href="#">
                    <button type="button" class="btn btn-link"><span class="bookmark-inside"></span>{{$tag->title}} ,</button>
                  </a>
                  @endif
                  @endforeach
                  @endforeach
                  </div>
                </div>
                <div class="col-6">
                  <div class="bloginside__share">
                    <p><span>Share :</span><span><a href="{{$blog->facebook}}"><i class="fab fa-facebook-f"></i></a><a href="{{$blog->twitter}}"><i class="fab fa-twitter"></i></a><a href="{{$blog->instagram}}"><i class="fab fa-instagram"></i></a><a href="{{$blog->linkedin}}"><i class="fab fa-linkedin-in"></i></a></span></p>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <br>
            <h3>Comment</h3>
            <br>
            @if($comments)
            @foreach($comments as $row)
            <div class="inside-comment">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-3">
                <img src="/frontend/assets/img/comment-1.png" alt="">
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12">
                <h6>JOHN HOPKINS</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" id="comment1" class="btn btn-link" onclick="myFunction(this.id)">Reply<i class="fas fa-reply"></i></button>
                <div class="newform">
                <form class="comment1" style="display: none" >
                  <i class="fas fa-times closebtn" id="1" onclick="closeFunction(this.id)"></i>
                  <div class="form-group mb-0">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" placeholder="Your Full Name">
                  </div>
                  <div class="form-group mb-0">
                    <label for="exampleInputEmail1">Your Email</label>
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                  <div class="form-group mb-0">
                    <label for="exampleInputEmail1">Your Website</label>
                    <input type="text" class="form-control" placeholder="Your Phone Number">
                  </div>
                  <div class="form-group mb-0">
                  <label for="exampleFormControlTextarea1">Your Comment</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your message here"></textarea>
                  </div>
                <button type="button" class="btn btn-light">submit</button>
                </form></div>
              </div>
            </div>
            <br>
           <div class="comment-left">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-3">
                <img src="/frontend/assets/img/comment-2.png" alt="">
              </div>
              <div class="col-lg-9 col-md-9 col-sm-12">
                <h6>{{$row->name}}</h6>
                <p>{{$row->comment}}</p>
                <!-- <button type="button" class="btn btn-link">Reply<i class="fas fa-reply"></i></button> -->
              </div>
            </div>
           </div>
           </div>
           @endforeach
           @endif
{{--            @if($comments)
            @foreach($comments as $row)
            <div class="inside-comment">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-3">
                <img src="/frontend/assets/img/comment-1.png" alt="">
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12">
                <h6>{{$row->name}}</h6>
                <p>{{$row->comment}}</p>
                <a href="#"><button type="button" class="btn btn-link">Reply<i class="fas fa-reply"></i></button></a>
              </div>
            </div>
           </div>
           @endforeach
           @endif --}}

           
           <div class="form-back">
            <h3>Leave a comment</h3>
            <br><br>
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12">
                <form method="post" action="/blog_comment/{{$blog->id}}">
                  @csrf
        <div class="form-group mb-0">
          <label for="exampleInputEmail1">Your Name</label>
          <input type="text" class="form-control" placeholder="Your Full Name">
        </div>
        <div class="form-group mb-0">
          <label for="exampleInputEmail1">Your Email</label>
          <input type="text" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group mb-0">
          <label for="exampleInputEmail1">Your Website</label>
          <input type="text" class="form-control" placeholder="Your Phone Number">
        </div>
        <div class="form-group mb-0">
        <label for="exampleFormControlTextarea1">Your Comment</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your message here"></textarea>
        </div>
        <div class="custom-control custom-checkbox">
            <label for="defaultCheck">
              <input type="checkbox" required="" id="defaultCheck" name="example2"> Save my name, email, and website in this browser for the next time I comment.</label>
            </div>
        <button type="button" class="btn btn-light">submit</button>
        </form> 
               </div>
               <div class="4">
                 &nbsp;
               </div>
            </div>
            <br>
               </div>
          </div>
          <div class="col-lg-4 col-md-4 d-lg-block d-md-block d-none">
            <div class="blog__sidebar">
              <div class="blog-info">
              @foreach($featureblog as $row)
              <img src="/uploads/blog/{{$row->image}}" alt="{{$row->title}}">
              <h5>{{$row->title}}</h5>
              <p>{{$row->description}}</p>
              @endforeach
              <br>
               <div class="sidebar__categories">
                <h3>Categories</h3>
                <br>
                <ul>
                  @foreach($categories as $row)
                  <a href="#">
                    <li>{{$row->title}}</li>
                  </a>
                  @endforeach
                </ul>
              </div>
              <br>
               <h3>Latest Posts</h3>
               <br>
              @foreach($latestblog as $row)
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="side__image">
                    <img src="/uploads/blog/{{$row->image}}" alt="{{$row->title}}">
                  </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 p-0">
                  <div class="side__info">
                    <p>
                      {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('Y-M-d')}} 
                      <?php 
                      $latestblogdata = new App\Models\Blog;
                      $latestcategory = $latestblogdata::find($row->id)->category; 
                      ?>
                      {{$latestcategory->title}}
                    </p>  
                    <a href="#">
                      <h6>{{$row->title}}</h6>
                    </a>
                  </div>
                </div>
              </div>
              <hr>
              @endforeach
              <br><br>
              <h3>Latest Events</h3>
              @foreach($events as $row)
              <a href="/blog/"><img src="/uploads/blog/{{$row->image}}" alt="{{$row->title}}"></a>
              @endforeach
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
@endsection