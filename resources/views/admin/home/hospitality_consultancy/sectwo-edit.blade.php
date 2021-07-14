@extends('admin.layouts.master')
@section('page-title')
    Edit Home Section 2
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
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm @if($data->lang == 'en') active @endif" id="tab_1">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('homesectwo_update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" name="title" value="{{$data->title}}" placeholder="Enter Text">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Background Image</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Video Url</label>
                      <input type="text" value="{{$data->video}}" class="form-control" required="" id="exampleInputEmail1" name="video" placeholder="Enter Video Url">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="text" class="form-control" value="{{$data->description}}" required="" id="exampleInputEmail1" name="description" placeholder="Enter Text">
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>                    
                    <a href="{{ route('hospitality_consultancy.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>

                  </form>
                </div>
                <div class="tab-pane p-v-sm @if($data->lang == 'ar') active @endif" id="tab_2" dir="rtl">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('homesectwo_update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" value="{{$data->title}}" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">الصورة الخلفية</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رابط الفيديو</label>
                      <input type="text" class="form-control" value="{{$data->video}}" required="" id="exampleInputEmail1" name="video" placeholder="Enter Video Url">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <input type="text" class="form-control" required="" value="{{$data->description}}" id="exampleInputEmail1" name="description" placeholder="أدخل النص">
                    </div>
                    <a href="{{ route('hospitality_consultancy.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection