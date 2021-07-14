@extends('admin.layouts.master')
@section('page-title')
    Edit Home Contact Section
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
              <h3>Edit Home Contact</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active" @if($data->lang == 'en') style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
                <li class="nav-item" @if($data->lang == 'ar') style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
              </ul>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm @if($data->lang == 'en') active @endif" id="tab_1">
                  <form role="form" method="post" enctype="multipart/form-data" action="/admin/home/contact/{{$data->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" required="" id="exampleInputEmail1" name="title" value="{{$data->title}}" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Map Embed Link Example <br>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.6505205569842!2d67.07762231447853!3d24.909899749410116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fbcac4b7627%3A0x31b2a8b32ea56b6b!2sDigitalopment!5e0!3m2!1sen!2s!4v1620612502882!5m2!1sen!2s"</label>
                      <input type="text" class="form-control" name="map_link" required="" id="exampleInputEmail1" placeholder="Enter Sub Title" value="{{$data->map_link}}">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" required="" id="exampleInputEmail1" value="{{$data->description}}" name="description" placeholder="Enter Text">
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                    <a href="{{ route('contact.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
                  </form>
                </div>
                <div class="tab-pane p-v-sm @if($data->lang == 'ar') active @endif" id="tab_2" dir="rtl">
                  <form role="form" method="post" enctype="multipart/form-data" action="/admin/home/contact/{{$data->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" required="" id="exampleInputEmail1" name="title" value="{{$data->title}}" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">مثال على رابط تضمين الخريطة <br>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.6505205569842!2d67.07762231447853!3d24.909899749410116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fbcac4b7627%3A0x31b2a8b32ea56b6b!2sDigitalopment!5e0!3m2!1sen!2s!4v1620612502882!5m2!1sen!2s"</label>
                      <input type="text" class="form-control" required="" name="map_link" id="exampleInputEmail1" placeholder="أدخل رابط الخريطة" value="{{$data->map_link}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <input type="text" class="form-control" required="" id="exampleInputEmail1" value="{{$data->description}}" name="description" placeholder="أدخل النص">
                    </div>
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                    <a href="{{ route('contact.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection