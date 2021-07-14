@extends('admin.layouts.master')
@section('page-title')
    Manage Staff
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
      <h3>Manage Staff</h3>
            <hr>
      <a href="/admin/manage-staff/create" class="btn btn-icon generalsetting_admin">
              <i class="fa fa-plus"></i>
            </a> 
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            {{-- <th style="width:20px;">
              <label class="ui-check m-0">
                <input type="checkbox"><i></i>
              </label>
            </th> --}}
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($staffs as $staff)
          <tr>
            {{-- <td><label class="ui-check m-0"><input type="checkbox" name="post[]"><i class="dark-white"></i></label></td> --}}
            <td>{{$staff->id}}</td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->email}}</td>
            <td>{{$staff->role}}</td>
            <td>
              <div class="btn-group dropdown dropdown">
                <button class="btn white dropdown-toggle generalsetting_admin" data-toggle="dropdown"><i class="fa @if($staff->status == 'ACTIVE') fa-check text-success @else fa-times text-danger inline @endif"></i>{{-- <i class="fa fa-times text-danger inline"></i> --}}</button>
                <div class="dropdown-menu pull-right">
                  <a class="dropdown-item" href="/admin/manage-staff/{{$staff->id}}?status=ACTIVE"><i class="fa fa-check text-success"></i></a>
                  <a class="dropdown-item" href="/admin/manage-staff/{{$staff->id}}?status=DEACTIVE"><i class="fa fa-times text-danger inline"></i></a>
                  <a class="dropdown-item" href="/admin/staff/{{$staff->id}}"><i class="fa fa-trash inline"></i></a>
                </div>
              </div>
              {{-- <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i class="fa fa-times text-danger inline"></i></a> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="dker p-a">
      <div class="row">
        <div class="col-sm-4 hidden-xs"></div>
        <div class="col-sm-4 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 0-{{count($staffs)}} of 50 items</small>
        </div>
        <div class="col-sm-4 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-0">
            {{-- <li><a href><i class="fa fa-chevron-left"></i></a></li>
            <li class="active"><a href>1</a></li>
            <li><a href>2</a></li>
            <li><a href>3</a></li>
            <li><a href>4</a></li>
            <li><a href>5</a></li>
            <li><a href><i class="fa fa-chevron-right"></i></a></li> --}}
            {{$staffs->links()}}
          </ul>
        </div>
      </div>
    </footer>
  </div>
      </div>
    </div>
  </div>
@endsection