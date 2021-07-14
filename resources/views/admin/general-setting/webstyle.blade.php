@extends('admin.layouts.master')
@section('page-title')
    Manage Social Google
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
            <center>
              <form action="/admin/general-setting/webstyle" method="post">
                @csrf
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Title *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input  name="title" @if($webstyle) @if($webstyle->title !='') value="{{$webstyle->title}}"  @endif @endif required class="form-control">
                  </div>
                </div><br>
                {{-- <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Frontend Theme Color *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input  name="front_theme_color" @if($webstyle) @if($webstyle->front_theme_color !='') value="{{$webstyle->front_theme_color}}"  @endif @endif required class="form-control">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Frontend Text Color *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input  name="front_text_color" @if($webstyle) @if($webstyle->front_text_color !='') value="{{$webstyle->front_text_color}}"  @endif @endif required class="form-control">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Frontend Background Color *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input  name="front_background" @if($webstyle) @if($webstyle->front_background !='') value="{{$webstyle->front_background}}"  @endif @endif required class="form-control">
                  </div>
                </div><br> --}}
                {{-- <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Admin Theme Color *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input  name="admin_theme_color" @if($webstyle) @if($webstyle->admin_theme_color !='') value="{{$webstyle->admin_theme_color}}"  @endif @endif required class="form-control">
                  </div>
                </div><br> --}}
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Admin Text Color *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input  name="admin_text_color" @if($webstyle) @if($webstyle->admin_text_color !='') value="{{$webstyle->admin_text_color}}"  @endif @endif required class="form-control">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Admin Background Color *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input  name="admin_background" @if($webstyle) @if($webstyle->admin_background !='') value="{{$webstyle->admin_background}}"  @endif @endif required class="form-control">
                  </div>
                </div><br>
                {{-- @if($webstyle)
                <div class="row">
                      <div class="col-4">
                        <h6 style="float:right">Tawk.to Status</h6>
                      </div>
                      <div class="col-2">
                        <div class="btn-group dropdown">
                          <button  class="btn white dropdown-toggle generalsetting_admin" data-toggle="dropdown">{{$webstyle->tawkto_status}}</button>
                          <div class="dropdown-menu dropdown-menu-scale">
                            <a class="dropdown-item" href="/admin/general-setting/webstyle_status/{{$webstyle->id}}?status=Active">Active</a>
                            <a class="dropdown-item" href="/admin/general-setting/webstyle_status/{{$webstyle->id}}?status=Dective">Deactive</a>
                          </div>
                        </div>
                      </div>
                    </div><br>
                    @endif

                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Tawk.to *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <textarea  name="tawkto" required class="form-control">@if($webstyle) @if($webstyle->tawkto !='') {{$webstyle->tawkto}}  @endif @endif</textarea>
                  </div>
                </div><br> --}}
                <button type="submit" class="btn btn-default generalsetting_admin" >Submit</button><hr>
                </div>
              </form>
            </center>
          </div>
      </div>
    </div>
  </div>
@endsection