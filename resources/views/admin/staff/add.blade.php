@extends('admin.layouts.master')
@section('page-title')
    Manage Staff
@endsection
@section('mainContent')
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
          <div class="box-divider m-0"></div>
            <div class="box-body">
              <form role="form" method="post" action="/admin/manage-staff">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">User Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection