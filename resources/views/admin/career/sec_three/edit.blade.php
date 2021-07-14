@extends('admin.layouts.master')
@section('page-title')
    Edit Career Sec 3
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
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('sec_three.update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$data->title}}" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sub Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" value="{{$data->sub_title}}" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Post Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="post_title" value="{{$data->post_title}}" required="" placeholder="Enter Post Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Apply Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="apply_title" value="{{$data->apply_title}}" required="" placeholder="Enter Apply Title">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Position Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->position_title}}" name="position_title" required="" placeholder="Enter Position Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                    <a href="{{ route('sec_three.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
                  </form>
                </div>
                <div class="tab-pane p-v-sm @if($data->lang == 'ar') active @endif" id="tab_2" dir="rtl">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('sec_three.update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" value="{{$data->title}}" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">صورة</label>
                      <input type="file" class="form-control" id="exampleInputEmail1"name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">العنوان الفرعي</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->sub_title}}" name="sub_title" required="" placeholder="أدخل العنوان الفرعي">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">عنوان الوظيفة</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="post_title" value="{{$data->post_title}}" required="" placeholder="أدخل عنوان الوظيفة">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">تطبيق العنوان</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->apply_title}}" name="apply_title" required="" placeholder="أدخل تطبيق العنوان">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">المسمى الوظيفي</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->position_title}}" name="position_title" required="" placeholder="أدخل عنوان الوظيفة">
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                    <a href="{{ route('sec_three.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection