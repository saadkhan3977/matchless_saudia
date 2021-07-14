@extends('admin.layouts.master')
@section('page-title')
    Manage Logo
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
                  <h5 style="float:right">Current Logo:</h5>
                </div>
                <div class="col-3">
                <br>
                  <img style="float:left" src="/uploads/logo/{{ ($logo) ? $logo->file : null}}" width="100" alt="MLS">
                </div>
              </div><br>
              <div class="row">

                <div class="col-6"> <p style="float:right">Set New Logo</p></div>
                  <form action="/admin/general-setting/logo" method="POST" class="form-inline" role="form" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label class="sr-only" for="">label</label>
                      <input style="float:left" required="" type="file" name="file" class="form-control" id="" placeholder="Input field">
                    </div> 
                  </div><br>
                    <button type="submit" class="btn btn-default generalsetting_admin">Submit</button>
                    <hr>
                  </form>
            </center>
              
          </div>
      </div>
    </div>
  </div>
@endsection