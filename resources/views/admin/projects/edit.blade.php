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
              <h3>Project Edit</h3>
              
              <hr>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm @if($data->lang == 'en') active @endif" id="tab_1">
                  <form role="form" method="post" id="enform" enctype="multipart/form-data" action="/admin/projects/{{$data->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <p class="alert-danger" id="en_title_error"></p>
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" value="{{$data->title}}" id="en_title" name="title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                      <input type="text" class="form-control" name="category" value="{{$data->category}}" required="" id="exampleInputEmail1" placeholder="Enter Sub Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Website</label>
                      <input type="text" class="form-control" name="website" required="" id="exampleInputEmail1" value="{{$data->website}}" placeholder="Enter Website Url">
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">Services</label>
                      <input type="text" value="{{$data->service_id}}" class="form-control" name="service_id" required="" id="exampleInputEmail1" placeholder="Enter Sub Title">
                    </div> --}}
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
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="text" class="form-control" value="{{$data->description}}" id="exampleInputEmail1" name="description" placeholder="Enter Text">
                    </div>
                    
                    <a href="{{route('projects.index')}}" class="btn white m-b generalsetting_admin">Cancel</a>
                    <button type="button" onclick='ensubmitForm()' class="btn white m-b generalsetting_admin">Submit</button>
                  </form>
                </div>
                <div class="tab-pane p-v-sm @if($data->lang =='ar') active @endif" id="tab_2" dir="rtl">
                  <form role="form" id="arform" method="post" enctype="multipart/form-data" action="/admin/projects/{{$data->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <p class="alert-danger" id="ar_title_error"></p>
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="ar_title" value="{{$data->title}}" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">فئة</label>
                      <input type="text" class="form-control" value="{{$data->category}}" name="category" required="" id="ar_category" placeholder="أدخل الفئة">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">موقع إلكتروني</label>
                      <input type="text" class="form-control" value="{{$data->website}}" name="website" required="" id="ar_website" placeholder="أدخل عنوان URL لموقع الويب">
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">خدمات</label>
                      <input type="text" class="form-control" value="{{$data->service_id}}" name="service_id" required="" id="ar_service_id" placeholder="أدخل الخدمات">
                    </div> --}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">شعار</label>
                      <input type="file" class="form-control" id="ar_logo" name="logo">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">صورة</label>
                      <input type="file" class="form-control" id="ar_image" name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رابط الفيديو</label>
                      <input type="text" class="form-control" id="ar_video" required="" required="" value="{{$data->video}}" name="video">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <input type="text" class="form-control" id="ar_description" value="{{$data->description}}" name="description" placeholder="أدخل النص">
                    </div>
                    
                    <a href="{{route('projects.index')}}" class="btn white m-b generalsetting_admin">إلغاء</a>
                    <button type="button" onclick='arsubmitForm()' class="btn white m-b generalsetting_admin">إرسال</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script> 
      function ensubmitForm() {
        var title= $('#en_title').val();  
        // alert(title);
        $.get("/admin/projects_edit_slug?title="+title+'&id='+{{$data->id}}, function(data){
        // $.get("/admin/projects_slug?title="+title, function(data){
          if(data.data =='success')
          {
            var form = document.getElementById('enform');
            form.title.focus();
            $('#en_title_error').text('This Text Already Exists');
          }
          if(data.data =='failed')
          {

            let title = document.forms["enform"]["title"].value;
            if (title == "") {
              form.title.focus();
              return false;
            }

            let category = document.forms["enform"]["category"].value;
            if (category == "") {
              form.category.focus();
              return false;
            }
            
            let website = document.forms["enform"]["website"].value;
            if (website == "") {
              form.website.focus();
              return false;
            }

            let service = document.forms["enform"]["service_id"].value;
            if (service == "") {
              form.service_id.focus();
              return false;
            }

            let video = document.forms["enform"]["video"].value;
            if (video == "") {
              form.video.focus();
              return false;
            }

            let description = document.forms["enform"]["description"].value;
            if (description == "") {
              form.description.focus();
              return false;
            }
            $('#enform').submit();
          }
        });
      }
    </script>

    <script> 
      function arsubmitForm() {

        var title= $('#ar_title').val();  
        $.get("/admin/projects_edit_slug?title="+title+'&id='+{{$data->id}}, function(data){
          if(data.data =='success')
          {
            var form = document.getElementById('arform');
            form.title.focus();
            $('#ar_title_error').text('هذا النص موجود بالفعل');
          }
          if(data.data == 'failed')
          {
            let title = document.forms["arform"]["title"].value;
            if (title == "") {
              $('#ar_title').focus();
              return false;
            }

            let category = document.forms["arform"]["category"].value;
            if (category == "") {
              $('#ar_category').focus();
              return false;
            }
            
            let website = document.forms["arform"]["website"].value;
            if (website == "") {
              $('#ar_website').focus();
              return false;
            }

            let service = document.forms["arform"]["service_id"].value;
            if (service == "") {
              $('#ar_service_id').focus();
              return false;
            }

            let video = document.forms["arform"]["video"].value;
            if (video == "") {
              $('#ar_video').focus();
              return false;
            }

            let description = document.forms["arform"]["description"].value;
            if (description == "") {
              $('#ar_description').focus();
              return false;
            }
            $('#arform').submit();
          }
        });
      }
    </script>
@endsection