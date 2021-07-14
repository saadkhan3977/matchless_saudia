@extends('admin.layouts.master')
@section('page-title')
    Manage Social Facebook
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
              <form action="/admin/social-setting/facebook" method="post">
                @csrf
                <div class="row">
                  <div class="col-4">
                  <br>
                    <p style="float:right">Status *</p>
                  </div>
                  <div class="col-4">
                  <br>
                    <div class="btn-group dropdown">
                      <button type="button"  class="btn white generalsetting_admin" data-toggle="dropdown">
                        @if($facebook) @if($facebook->status !=''){{$facebook->status}}  @endif @else Deactive @endif <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu animated fadeIn">
                        <li class="dropdown-item"><a href=@if($facebook)"/admin/social-setting/facebook/status?status=ACTIVE" @endif>ACTIVE</a></li>
                        <li class="dropdown-item"><a href=@if($facebook)"/admin/social-setting/facebook/status?status=DEACTIVE"@endif>DEACTIVE</a></li>
                      </ul>
                    </div>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">App ID *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="app_id" @if($facebook) @if($facebook->app_id !='') value=" {{$facebook->app_id}} " @endif @endif required class="form-control">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">App Secret *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="app_secret" @if($facebook) @if($facebook->app_secret !='') value=" {{$facebook->app_secret}} " @endif @endif required class="form-control">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Website URL *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="web_url" @if($facebook) @if($facebook->web_url !='') value=" {{$facebook->web_url}} " @endif @endif required class="form-control">
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Valid OAuth Redirect URI *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="oauth_uri" @if($facebook) @if($facebook->oauth_uri !='') value=" {{$facebook->oauth_uri}} " @endif @endif required class="form-control">
                  </div>
                </div><br>
                <button type="submit" class="btn btn-default generalsetting_admin">Submit</button><hr>
                </div>
              </form>
            </center>
          </div>
      </div>
    </div>
  </div>
@endsection