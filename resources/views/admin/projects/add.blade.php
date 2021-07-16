@extends('admin.layouts.master')
@section('page-title')
    Create Project
@endsection
@section('mainContent')
<style type="text/css">
  .form-control:focus {
    outline: none !important;
    border:1px solid red;
    box-shadow: 0 0 10px #719ECE;
}
</style>
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
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active">
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item ">&nbsp;
                  {{-- <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_1">EN</a> --}}
                </li>
                <li class="nav-item">
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul>
              <hr>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm active" id="tab_1">
                  <form role="form" id="enform" method="post" action="{{route('projects.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <p class="alert-danger" id="en_title_error"></p>
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="en_title" name="title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                      <input type="text" class="form-control" name="category" required="" id="exampleInputEmail1" placeholder="Enter Sub Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Website</label>
                      <input type="text" class="form-control" name="website" required="" id="exampleInputEmail1" placeholder="Enter Website Url">
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">Services</label>
                      <input type="text" class="form-control" name="service_id" required="" id="exampleInputEmail1" placeholder="Enter Sub Title">
                    </div> --}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Logo</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" required="" name="logo">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" required="" name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Video Link</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" required="" required="" name="video">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter Text">
                    </div>
                    
                    <a href="{{route('projects.index')}}" class="btn white m-b generalsetting_admin">Cancel</a>
                    <button type="button" onclick='ensubmitForm()' class="btn white m-b generalsetting_admin">Submit</button>
                  </form>
                </div>
                <div class="tab-pane p-v-sm" id="tab_2"  dir="rtl">
                  <form role="form" id="arform" method="post" action="{{route('projects.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <p class="alert-danger" id="ar_title_error"></p>
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="ar_title"  name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">فئة</label>
                      <input type="text" class="form-control" name="category" required="" id="ar_category" placeholder="أدخل الفئة">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">موقع إلكتروني</label>
                      <input type="text" class="form-control" name="website" required="" id="ar_website" placeholder="أدخل عنوان URL لموقع الويب">
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">خدمات</label>
                      <input type="text" class="form-control" name="service_id" required="" id="ar_service_id" placeholder="أدخل الخدمات">
                    </div> --}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">شعار</label>
                      <input type="file" class="form-control" id="ar_logo" required="" name="logo">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">صورة</label>
                      <input type="file" class="form-control" id="ar_image" required="" name="image">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رابط الفيديو</label>
                      <input type="text" class="form-control" id="ar_video" required="" required="" name="video">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <input type="text" class="form-control" id="ar_description" name="description" placeholder="أدخل النص">
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
      function arsubmitForm() {
        var title= $('#ar_title').val();  
        $.get("/admin/projects_slug?title="+title, function(data){
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
              // form.title.focus();
              $('#ar_title').focus();
              // alert("Category must be filled out");
              return false;
            }

            let category = document.forms["arform"]["category"].value;
            if (category == "") {
              $('#ar_category').focus();
              // alert("Category must be filled out");
              return false;
            }
            
            let website = document.forms["arform"]["website"].value;
            if (website == "") {
              $('#ar_website').focus();
              // alert("Website must be filled out");
              return false;
            }

            let service = document.forms["arform"]["service_id"].value;
            if (service == "") {
              $('#ar_service_id').focus();
              // form.service_id.focus();
              // alert("Service must be filled out");
              return false;
            }
     
            let logo = document.forms["arform"]["logo"].value;
            if (logo == "") {
              $('#ar_logo').focus();
              // form.logo.focus();
              // alert("Logo must be filled out");
              return false;
            }
     
            let image = document.forms["arform"]["image"].value;
            if (image == "") {
              $('#ar_image').focus();
              // form.image.focus();
              // alert("Image must be filled out");
              return false;
            }

            let video = document.forms["arform"]["video"].value;
            if (video == "") {
              // form.video.focus();
              $('#ar_video').focus();
              // alert("Video Link must be filled out");
              return false;
            }

            let description = document.forms["arform"]["description"].value;
            if (description == "") {
              $('#ar_description').focus();
              // form.description.focus();
              // alert("Description must be filled out");
              return false;
            }
            $('#arform').submit();
          }
        });
      }
    </script>
    <script> 
      function ensubmitForm() {
        var title= $('#en_title').val();  
        $.get("/admin/projects_slug?title="+title, function(data){
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
              // alert("Category must be filled out");
              return false;
            }

            let category = document.forms["enform"]["category"].value;
            if (category == "") {
              form.category.focus();
              // alert("Category must be filled out");
              return false;
            }
            
            let website = document.forms["enform"]["website"].value;
            if (website == "") {
              form.website.focus();
              // alert("Website must be filled out");
              return false;
            }

            let service = document.forms["enform"]["service_id"].value;
            if (service == "") {
              form.service_id.focus();
              // alert("Service must be filled out");
              return false;
            }
     
            let logo = document.forms["enform"]["logo"].value;
            if (logo == "") {
              form.logo.focus();
              // alert("Logo must be filled out");
              return false;
            }
     
            let image = document.forms["enform"]["image"].value;
            if (image == "") {
              form.image.focus();
              // alert("Image must be filled out");
              return false;
            }

            let video = document.forms["enform"]["video"].value;
            if (video == "") {
              form.video.focus();
              // alert("Video Link must be filled out");
              return false;
            }

            let description = document.forms["enform"]["description"].value;
            if (description == "") {
              form.description.focus();
              // alert("Description must be filled out");
              return false;
            }

            // alert(data.data);
            
            // $("#enform").validate();
            $('#enform').submit();
          }
        });
      }
    </script>
@endsection