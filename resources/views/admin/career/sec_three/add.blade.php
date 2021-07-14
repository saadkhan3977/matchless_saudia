@extends('admin.layouts.master')
@section('page-title')
    Create Career Section 3
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
              <h3>Create Career Section 3</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active" @if($en) style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" style="margin-right: 5px" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item" @if($ar) style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul><hr>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm  @if(!$en && $ar) active @endif " id="tab_1">
                  <form role="form" method="post" action="{{route('sec_three.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sub Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Post Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="post_title" required="" placeholder="Enter Post Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Apply Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="apply_title" required="" placeholder="Enter Apply Title">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Position Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="position_title" required="" placeholder="Enter Position Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="file" class="form-control" id="exampleInputEmail1" required="" name="image">
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                    <a href="{{ route('sec_three.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
                  </form>
                </div>
                <div class="tab-pane p-v-sm @if(!$ar && $en) active @endif" id="tab_2" dir="rtl">
                  <form role="form" method="post" action="{{route('sec_three.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">صورة</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" required="" name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">العنوان الفرعي</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" required="" placeholder="أدخل العنوان الفرعي">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">عنوان الوظيفة</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="post_title" required="" placeholder="أدخل عنوان الوظيفة">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">تطبيق العنوان</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="apply_title" required="" placeholder="أدخل تطبيق العنوان">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">المسمى الوظيفي</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="position_title" required="" placeholder="أدخل عنوان الوظيفة">
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