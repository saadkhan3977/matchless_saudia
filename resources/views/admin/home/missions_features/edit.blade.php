@extends('admin.layouts.master')
@section('page-title')
    Edit Home Section 4
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
              <h3>Edit Home Section 4</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active" @if($data->lang =='ar') style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" style="margin-right: 5px;" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item ac" @if($data->lang =='en') style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul><hr>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm  @if($data->lang =='en') active @endif " id="tab_1">
              <form role="form" method="post" enctype="multipart/form-data" action="/admin/home/missions_features/{{$data->id}}">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" required="" id="exampleInputEmail1" name="title" value="{{$data->title}}" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                  <input type="text" class="form-control" required="" value="{{$data->description}}" id="exampleInputEmail1" name="description" placeholder="Enter Text">
                </div>
                
                <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                <a href="{{ route('missions.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
              </form>
            </div>
            <div class="tab-pane p-v-sm @if($data->lang =='ar') active @endif" id="tab_2" dir="rtl">
              <form role="form" method="post" action="/admin/home/missions_features/{{$data->id}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="exampleInputEmail1">لقب</label>
                  <input type="text" class="form-control" value="{{$data->title}}" required="" id="exampleInputEmail1" name="title" placeholder="أدخل العنوان">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">صورة</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="Enter Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">وصف</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                  <input type="text" class="form-control" value="{{$data->description}}" required="" id="exampleInputEmail1" name="description" placeholder="أدخل النص">
                </div>
                <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                <a href="{{ route('missions.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
              </form>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection