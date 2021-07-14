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
            <div class="row m-b">
              
              <div class="col-sm-6">
                <div class="box">
                  <div class="box-header generalsetting_admin">
                    <center><h3>Website Loader</h3></center>
                  </div>
                  <div class="box-body">
                  <center>
                    {{-- <div class="row">
                      <div class="col-4">
                        <p>Loader</p>
                      </div>
                      <div class="col-2">
                        <div class="btn-group dropdown">
                          <button class="btn white dropdown-toggle generalsetting_admin" data-toggle="dropdown">Deactive</button>
                          <div class="dropdown-menu dropdown-menu-scale">
                            <a class="dropdown-item" href>Active</a>
                            <a class="dropdown-item" href>Deactive</a>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <div class="row">
                      <div class="col-4">
                        <p>Current Loader</p>
                      </div>
                      <div class="col-2">
                        @if($loader->website_loader)
                        <img src="/uploads/preloader/{{$loader->website_loader}}" width="150" alt="">
                        @else
                        EMPTY
                        @endif
                      </div>
                    </div>
                    <form action="/admin/general-setting/preloader/website" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">  
                        <div class="col-4">
                          <p>Set New Loader</p>
                        </div>
                        <div class="col-2">
                            <input type="file" required name="website_loader">      
                        </div>
                    </div>
                    <br>
                        <button class="btn generalsetting_admin">Submit</button>
                      </form>
                      </center>
                  </div>
                </div>
              </div>


              <div class="col-sm-6">
                <div class="box">
                  <div class="box-header generalsetting_admin" >
                    <center><h3>Admin Loader</h3></center>
                  </div>
                  <div class="box-body">
                  <center>
                    {{-- <div class="row">
                      <div class="col-4">
                        <p>Loader</p>
                      </div>
                      <div class="col-2">
                        <div class="btn-group dropdown">
                          <button class="btn white dropdown-toggle generalsetting_admin" data-toggle="dropdown">Deactive</button>
                          <div class="dropdown-menu dropdown-menu-scale">
                            <a class="dropdown-item" href/>Active</a>
                            <a class="dropdown-item" href>Deactive</a>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <div class="row">
                      <div class="col-4">
                        <p>Current Loader</p>
                      </div>
                      <div class="col-2">
                        @if($loader->admin_loader)
                        <img src="/uploads/preloader/{{$loader->admin_loader}}" width="150" alt="">
                        @else
                        EMPTY
                        @endif
                      </div>
                    </div>
                    <form action="/admin/general-setting/preloader/admin" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">  
                        <div class="col-4">
                          <p>Set New Loader</p>
                        </div>
                        <div class="col-2">
                            <input type="file" required name="admin_loader">      
                        </div>
                    </div>
                    <br>
                        <button type="Submit" class="btn generalsetting_admin">Submit</button>
                      </form>
                      </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection