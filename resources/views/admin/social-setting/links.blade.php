@extends('admin.layouts.master')
@section('page-title')
    Manage Social Links
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
              <form action="/admin/social-setting/links" method="post">
                @csrf
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Facebook *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="facebook" @if($links) @if($links->facebook !='') value=" {{ ($links) ? $links->facebook : null}} " @endif  @endif class="form-control">
                  </div>
                  <div class="col-1"><br>
                    <label class="md-switch">
                      <input type="checkbox" @if($links) @if($links->facebook_status !='') checked @endif @endif name="facebook_status">
                      <i class="generalsetting_admin_checkbox"></i>
                    </label>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Whatsapp *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="whatsapp" required value="@if($links) {{$links->whatsapp}} @endif" class="form-control">
                  </div>
                  <div class="col-1"><br>
                    <label class="md-switch">
                      <input type="checkbox" @if($links) @if($links->whatsapp_status !='') checked @endif @endif name="whatsapp_status">
                      <i class="generalsetting_admin_checkbox"></i>
                    </label>
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Twitter *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="twitter" required value="@if($links) {{$links->twitter}} @endif" class="form-control">
                  </div>
                  <div class="col-1"><br>
                    <label class="md-switch">
                      <input type="checkbox" @if($links) @if($links->twitter_status !='') checked @endif @endif name="twitter_status">
                      <i class="generalsetting_admin_checkbox"></i>
                    </label>
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Linkedin *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="linkedin" required value="@if($links) {{$links->linkedin}} @endif" class="form-control">
                  </div>
                  <div class="col-1"><br>
                    <label class="md-switch">
                      <input type="checkbox" @if($links) @if($links->linkedin_status !='') checked @endif @endif name="linkedin_status">
                      <i class="generalsetting_admin_checkbox"></i>
                    </label>
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Instagram *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="instagram" required value="@if($links) {{$links->instagram}} @endif" class="form-control">
                  </div>
                  <div class="col-1"><br>
                    <label class="md-switch">
                      <input type="checkbox" @if($links) @if($links->instagram_status !='') checked @endif @endif name="instagram_status">
                      <i class="generalsetting_admin_checkbox"></i>
                    </label>
                  </div>
                </div><br>

                {{-- <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Pintrest *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <input type="text" name="pintrest" required value="@if($links) {{$links->pintrest}} @endif" class="form-control">
                  </div>
                  <div class="col-1"><br>
                    <label class="md-switch">
                      <input type="checkbox" @if($links) @if($links->pintrest_status !='') checked @endif @endif name="pintrest_status">
                      <i class="generalsetting_admin_checkbox"></i>
                    </label>
                  </div>
                </div> --}}<br>
                <button type="submit" class="btn btn-default generalsetting_admin">Submit</button><hr>
                </div>
              </form>
            </center>
          </div>
      </div>
    </div>
  </div>
@endsection