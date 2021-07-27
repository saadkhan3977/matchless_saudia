@extends('admin.layouts.master')
@section('page-title')
    Edit About Sec 3
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
              <h3>Edit About Section 3</h3>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm @if($data->lang == 'en') active @endif" id="tab_1">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('about_sec_three.update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->heading}}" name="heading" required="" placeholder="Enter Heading">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->title}}" name="title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$data->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sub Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" value="{{$data->sub_title}}" required="" placeholder="Enter Sub Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sub Description</label>
                      <textarea name="sub_description" required="" class="form-control" id="" cols="30" rows="10">{{$data->sub_description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Button Text</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="button_text" value="{{$data->button_text}}" required="" placeholder="Enter Button Text">
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                    <a href="{{ route('about_sec_three.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>

                  </form>
                </div>
                <div class="tab-pane p-v-sm @if($data->lang == 'ar') active @endif" id="tab_2" dir="rtl">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('about_sec_three.update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">عنوان</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->heading}}" name="heading" required="" placeholder="عنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->title}}" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$data->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">العنوان الفرعي</label>

                      <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" value="{{$data->sub_title}}" required="" placeholder="أدخل العنوان الفرعي">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">الوصف الفرعي</label>
                      <textarea name="sub_description" required="" class="form-control" id="" cols="30" rows="10">{{$data->sub_description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">صورة</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">زر كتابة</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="button_text" value="{{$data->button_text}}" required="" placeholder="أدخل نص الزر">
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">رابط الفيديو</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="video_url" value="{{$data->video_url}}" required="" placeholder="أدخل الارتباط">
                    </div> --}}
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                    <a href="{{ route('about_sec_three.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>

                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection