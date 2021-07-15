@extends('admin.layouts.master')
@section('page-title')
    Manage About Section 3
@endsection
@section('mainContent')
<style type="text/css">
  .table-responsive {
    display: block;
    width: 100%;
    height: 52vh;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div ui-view class="app-body" id="view">
      <div class="p-a white lt box-shadow generalsetting_admin">
        <div class="row">
          <div class="col-sm-6">
            <h4 class="mb-0 _300">Welcome to MLS</h4>
          </div>
          <div class="col-sm-6 text-sm-right"></div>
        </div>
      </div>
      <div class="padding">

          <div class="box">
          <div class="box-header">
            <h3>Manage About Section 3</h3>
            <hr>
            @if(count($data) < '2')
              <a href="{{route('about_sec_three.create')}}" class="btn btn-icon generalsetting_admin"><i class="fa fa-plus"></i></a>
            @endif
          </div>
    
    <div class="table-responsive" style="height: 100%">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>ID</th>
            <th>Heading</th>
            <th>Title</th>
            <th>Description</th>
            <th>Sub Title</th>
            <th>Sub Description</th>
            <th>Image</th>
            {{-- <th>Video</th> --}}
            <th>Language</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          @if($data)
          @foreach($data as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->heading}}</td>
            <td>{{$row->title}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->sub_title}}</td>
            <td>{{$row->sub_description}}</td>
            <td><img src="/uploads/about/{{$row->image}}" alt="{{$row->title}}" width="100"></td>
            {{-- <td>{{$row->video_url}}</td> --}}
            <td>{{$row->lang}}</td>
            <td style="display: flex;">
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="{{route('about_sec_three.show',$row->id)}}"><i class="fa fa-edit "></i></a>
              <form method="post" action="{{route('about_sec_three.destroy',$row->id)}}">
                @csrf
                @method('delete')
              <button type="submit" onclick="return confirm('Are You Sure Want To Delete This..??')" class="btn btn-default generalsetting_admin"><i class="fa fa-trash "></i></button>
              </form>
            </td>
          </tr>
          @endforeach
          @endif

        </tbody>
      </table>
    </div>
    
  </div>
      </div>
    </div>
  </div>
@endsection