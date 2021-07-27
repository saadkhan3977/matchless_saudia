@extends('admin.layouts.master')
@section('page-title')
    Edit Project
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
              <form role="form" method="post" enctype="multipart/form-data" action="/admin/projects/{{$data->id}}">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Category</label>
                  <input type="text" class="form-control" name="category" value="{{$data->category}}" required="" id="exampleInputEmail1" placeholder="Enter Sub Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Website</label>
                  <input type="text" class="form-control" name="website" required="" id="exampleInputEmail1" value="{{$data->website}}" placeholder="Enter Website Url">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Services</label>
                  <input type="text" value="{{$data->service_id}}" class="form-control" name="service_id" required="" id="exampleInputEmail1" placeholder="Enter Sub Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Logo</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="logo">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Video</label>
                  <input type="text" required="" class="form-control" id="exampleInputEmail1" name="video" value="{{$data->video}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" value="{{$data->description}}" id="exampleInputEmail1" name="description" placeholder="Enter Text">
                </div>
                
                <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection