@extends('admin.layouts.master')
@section('page-title')
    Edit About Sec 1
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
              {{-- <h3>Language</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active" @if($data->lang == 'en') style="display: none" @endif>
                  <a class="nav-link active generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
                <li class="nav-item active" @if($data->lang == 'ar') style="display: none" @endif>
                  <a class="nav-link  generalsetting_admin" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
              </ul> --}}
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm @if($data->lang == 'en') active @endif" id="tab_1">
              <form role="form" method="post" enctype="multipart/form-data" action="/admin/about/sec_two/{{$data->id}}">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$data->description}}</textarea>
                </div>
                
                <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
              </form>
            </div>
                <div class="tab-pane p-v-sm @if($data->lang == 'ar') active @endif" id="tab_2">
                  <form role="form" method="post" enctype="multipart/form-data" action="/admin/about/sec_two/{{$data->id}}">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="exampleInputEmail1">لقب</label>
                  <input type="text" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">صورة</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">وصف</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                  <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$data->description}}</textarea>
                </div>
                
                <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
              </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection