@extends('admin.layouts.master')
@section('page-title')
    Manage Projects
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
            <h3>Manage Projects</h3>
              <hr>
              <a href="{{route('projects.create')}}" class="btn btn-icon generalsetting_admin"><i class="fa fa-plus"></i></a>
          </div>
          <div class="table-responsive" style="height: 305px">
            <table id="example2" class="table table-striped b-t">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Gallery</th>
                  <th>Website</th>
                  {{-- <th>Services</th> --}}
                  <th>Image</th>
                  <th>Logo</th>
                  <th>Video</th>
                  <th>Description</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @if($data)
                <?php $id =1 ?>
                @foreach($data as $row)
                <tr>
                  <td>{{$id++}}</td>
                  <td>{{$row->title}}</td>
                  <td>{{$row->category}}</td>
                  <td>
                    <a href="/admin/project-gallery/{{$row->id}}" class="btn btn-default generalsetting_admin"> <i class="fa fa-plus"></i></a>
                  </td>
                  <td>{{$row->website}}</td>
                  {{-- <td>{{$row->service_id}}</td> --}}
                  <td><img width="150" height="100" src="/uploads/project/{{$row->image}}" alt="{{$row->title}}"></td>
                  <td><img width="150" height="100" src="/uploads/project/{{$row->logo}}" alt="{{$row->title}}"></td>
                  <td>{{$row->video}}</td>
                  <td>{{$row->description}}</td>
                  <td style="display: flex;">
                    <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="{{route('projects.show',$row->id)}}"><i class="fa fa-edit "></i></a>
                    <form method="post" action="{{route('projects.destroy',$row->id)}}">
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