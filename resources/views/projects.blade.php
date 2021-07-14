@extends('layouts.master')
@section('page-title')
    Projects
@endsection
@section('mainContent')
<section>
  <div class="container">
    <div class="project-main">
      <h2>{{ ($text) ? $text->description : null}}</h2>
    </div>
    <div class="project-info">
      <div class="row">
        @if($data)
        @foreach($data as $row)
        <div class="col-lg-4 col-md-4 col-sm-6">
          <?php
            $segments = request()->segments();
            $langs = end($segments);
            //print_r($langs);die;
          ?>
          @if($langs =='ar')
          <a href="/project/{{$row->slug}}/lang/{{$langs}}">
          @else
          <a href="/project/{{$row->slug}}">
          @endif
            <div class="proback">
            <img src="/uploads/project/{{$row->image}}" alt="">
            <div class="proback-info">
            <p>{{$row->category}}</p>
            <h3>{{$row->title}}</h3>
            </div>
          </div>
          </a>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </div>
</section>
@endsection