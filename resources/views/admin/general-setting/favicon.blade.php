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
            <center>
              
              <div class="row">
                <div class="col-6">
                <br>
                  <h5 style="float:right">Current Favicon:</h5>
                </div>
                <div class="col-3">
                <br>
                  @if($logo)
                  <img style="float:left" src="/uploads/logo/{{$logo->file}}" width="100" alt="MLS">
                  @endif
                </div>
              </div><br>
              <div class="row">

                <div class="col-6"> <p style="float:right">Set New Favicon</p></div>
                  <form action="/admin/general-setting/favicon" method="POST" class="form-inline" role="form" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label class="sr-only" for="">label</label>
                      <input style="float:left" type="file" name="file" class="form-control" required="" id="" placeholder="Input field">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary generalsetting_admin" >Submit</button><hr>
              </form>
            </center>
              
          </div>
      </div>
    </div>
  </div>
@endsection