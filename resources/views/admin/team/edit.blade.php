@extends('admin.layouts.master')
@section('page-title')
    Edit Team
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
              <h3>Edit Team</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item" @if($data->lang == 'ar') style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item active" @if($data->lang == 'en') style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" style="margin-left: 5px;" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul><hr>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm @if($data->lang == 'en') active @endif" id="tab_1">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('team.update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Position</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->position}}" name="position" required="" placeholder="Enter Position">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Facebook Link</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->facebook_link}}" name="facebook_link" required="" placeholder="Enter Facebook Link">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Twitter Link</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->twitter_link}}" name="twitter_link" required="" placeholder="Enter Twitter Link">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Linkedin Link</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->linkedin_link}}" name="linkedin_link" required="" placeholder="Enter linkedin Link">
                    </div>

                    
                    <a href="{{ route('about_sec_one.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>

                  </form>
                </div>
                <div class="tab-pane p-v-sm @if($data->lang == 'ar') active @endif" id="tab_2" dir="rtl">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('team.update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->title}}" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">صورة</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">موضع</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->position}}" name="position" required="" placeholder="أدخل الوظيفة">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رابط الفيسبوك</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="facebook_link" value="{{$data->facebook_link}}" required="" placeholder="أدخل رابط الفيسبوك">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رابط تويتر</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->twitter_link}}" name="twitter_link" required="" placeholder="أدخل رابط تويتر">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">لينكد إن لينك</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="linkedin_link" required="" value="{{$data->linkedin_link}}" placeholder="أدخل رابط لينكد إن">
                    </div>

                    
                    
                    <a href="{{ route('team.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>

                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection