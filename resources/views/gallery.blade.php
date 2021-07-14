@extends('layouts.master')
@section('page-title')
Gallery
@endsection
@section('mainContent')

<section>
      <div class="container max-con">
        <div class="our-gallery">
          <h3>OUR GALLERy</h3>
          <p>Lorem ipsum dolor sit amet,<br> consetetur sadipscing elitr, sed diam</p>
          <br>
          <div class="row">
              <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
  <div class="cont">
  <div class="demo-gallery">
    <ul id="lightgallery">
      @if($gallerys)
      <?php $id='1' ?>
      @foreach($gallerys as $row)
      {{-- @if($id++ < '9') --}}
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
    {{-- @endif --}}
    @endforeach
    @endif
        
    </ul>
  </div>
</div>
    </section>
            <!--div> -->
          </div>
        </div>
      </div>
    </section>
@endsection