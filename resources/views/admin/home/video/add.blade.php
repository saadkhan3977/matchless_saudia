@extends('admin.layouts.master')
@section('page-title')
    Create Home Section 1
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
              <h3>Create Home Section 1</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active" @if($en) style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" style="margin-right: 5px;" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item" @if($ar) style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul>
              <h4></h4>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm @if(!$en && $ar) active @endif" id="tab_1">
                  <form role="form" method="post" action="{{route('video.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="title" placeholder="Enter Title">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sub Title</label>
                      <input type="text" class="form-control" name="sub_title" required="" id="exampleInputEmail1" placeholder="Enter Sub Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Link</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="link" placeholder="Enter Action Link">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Button Text</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="button_text" placeholder="Enter Button Text">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-6">
                          <label for="exampleInputEmail1">Video URL</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" required="" name="video_url">
                        </div>
                        <div class="col-6">
                          <label for="exampleInputEmail1">Background Video</label>
                          <input type="file" class="form-control generalsetting_admin" id="exampleInputEmail1" required="" name="background_video">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="description" placeholder="Enter Text">
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                    <a href="{{ route('video.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>

                  </form>
                </div>
                <div class="tab-pane p-v-sm @if(!$ar && $en) active @endif" id="tab_2" dir="rtl">
                  <form role="form" method="post" action="{{route('video.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="title" placeholder="أدخل العنوان">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">العنوان الفرعي</label>
                      <input type="text" class="form-control" name="sub_title" required="" id="exampleInputEmail1" placeholder="أدخل العنوان الفرعي">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ارتباط الإجراء</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="link" placeholder="أدخل ارتباط الإجراء ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">زر كتابة</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="button_text" placeholder="أدخل نص الزر">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-6">
                          <label for="exampleInputEmail1">رابط الفيديو</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" required="" name="video_url">
                        </div>
                        <div class="col-6">
                          <label for="exampleInputEmail1">فيديو الخلفية</label>
                          <input type="file" class="form-control generalsetting_admin" id="exampleInputEmail1" required="" name="background_video">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="description" placeholder="أدخل النص">
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                    <a href="{{ route('video.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection