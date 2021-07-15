@extends('admin.layouts.master')
@section('page-title')
    Manage Home Section 4
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
            <h3>Manage Home Section 4 Heading</h3>
                  <hr>
          @if(count($data) < '2')
            <a href="{{route('missions.create')}}" class="btn btn-icon generalsetting_admin">
                    <i class="fa fa-plus"></i>
                  </a>
                  @endif
          </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          @if($data)
          @foreach($data as $row)
          <tr>
            <td>{{$row->title}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->lang}}</td>
            <td style="display: flex;">
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="{{route('missions.show',$row->id)}}"><i class="fa fa-edit "></i></a>
              <form method="post" action="{{route('missions.destroy',$row->id)}}">
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
  <div class="box">
          <div class="box-header">
            <h3>Manage Home Missions Section</h3>
                  <hr>
          @if(count($featuredata) < '8')
            <a href="{{route('missions_features.create')}}" class="btn btn-icon generalsetting_admin">
                    <i class="fa fa-plus"></i>
                  </a>
                  @endif
          </div>
    
    <div class="table-responsive" style="height: 100%">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Lang</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          @if($featuredata)
          <?php $id = 1 ?>
          @foreach($featuredata as $row)
          <tr>
            <td>{{$id++}}</td>
            <td>{{$row->title}}</td>
            <td>{{$row->description}}</td>
            <td><img src="/uploads/home/{{$row->image}}" width="100" alt="{{$row->title}}"></td>
            <td>{{$row->lang}}</td>
            <td style="display: flex;">
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="{{route('missions_features.show',$row->id)}}"><i class="fa fa-edit "></i></a>
              <form method="post" action="{{route('missions_features.destroy',$row->id)}}">
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