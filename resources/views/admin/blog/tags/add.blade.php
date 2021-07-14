@extends('admin.layouts.master')
@section('page-title')
    Create Tags
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
              <form role="form" method="post" action="/admin/blog_tags" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Text">
                </div>
                <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection