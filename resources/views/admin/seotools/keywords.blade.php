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
              <form action="/admin/seotools/keywords" method="post">
                @csrf
                <div class="row">
                  <div class="col-4">
                  <br>
                    <h6 style="float:right">Keywords *</h6>
                  </div>
                  <div class="col-4">
                  <br>
                    <textarea  name="keyword" required class="form-control">@if($seotools) @if($seotools->keyword !='') {{$seotools->keyword}}  @endif @endif</textarea>
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