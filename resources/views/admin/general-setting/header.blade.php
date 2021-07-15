@extends('admin.layouts.master')
@section('page-title')
    Manage Footer
@endsection
@section('mainContent')
<style type="text/css">
  .table-responsive {
    display: block;
    width: 100%;
    height: 52vh;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
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
        <div class="box-body">
              <h3>Footer Area</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active">
                  <a class="nav-link generalsetting_admin" style="margin-right: 5px;" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm active" id="tab_1">
                  <form action="/admin/general-setting/header" method="post">
                  {{-- <form role="form" method="post" action="/admin/about/sec_one" enctype="multipart/form-data"> --}}
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subscribe Newsletter</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->subscribe}} @endif" name="subscribe" required="" placeholder="Enter Subscribe Newsletter">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Get in Touch</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->getintouch}} @endif" name="getintouch" required="" placeholder="Enter Get In Touch">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contact Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->title}} @endif" name="title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email < Laber ></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->email_label}} @endif" name="email_label" required="" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->email}} @endif" name="email" required="" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone < Laber ></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->phone_label}} @endif" name="phone_label" required="" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone No</label>
                      <input type="phone" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->phone}} @endif" name="phone" required="" placeholder="Enter Phone No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Copyright</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->copyright}} @endif" name="copyright" required="" placeholder="Enter Copyright">
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">Submit</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($en) {{$en->submit}} @endif" name="submit" required="" placeholder="Enter Submit">
                    </div> --}}
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                  </form>
                </div>
                <div class="tab-pane p-v-sm" id="tab_2"  dir="rtl">
                  <form role="form" method="post" action="/admin/general-setting/header" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">اشترك في النشرة الإخبارية</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->subscribe}} @endif" name="subscribe" required="" placeholder="أدخل الاشتراك في النشرة الإخبارية">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ابقى على تواصل</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->getintouch}} @endif" name="getintouch" required="" placeholder="أدخل Get In Touch">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->title}} @endif" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->email_label}} @endif" name="email_label" required="" placeholder="البريد الإلكتروني <تسمية>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">بريد إلكتروني</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->email}} @endif" name="email" required="" placeholder="أدخل البريد الإلكتروني">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">أدخل الهاتف <التسمية></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->phone_label}} @endif" name="phone_label" required="" placeholder="أدخل الهاتف <التسمية>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رقم الهاتف</label>
                      <input type="phone" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->phone}} @endif" name="phone" required="" placeholder="أدخل رقم الهاتف">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">حقوق النشر</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->copyright}} @endif" name="copyright" required="" placeholder="أدخل حقوق النشر">
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">إرسال</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="@if($ar) {{$ar->submit}} @endif" name="submit" required="" placeholder="أدخل إرسال">
                    </div> --}}
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                  </form>
                </div>
              </div>
          </div>

          {{-- <div class="box">
            <center>
              <div class="row">
                <div class="col-6">
                  <ul style="float:right" class="nav nav-pills nav-sm">
                    <li class="nav-item active">
                      <a class="nav-link generalsetting_admin" style="margin-right: 5px;" href data-toggle="tab" data-target="#tab_1">EN</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-content">      
                <div class="tab-pane p-v-sm active" id="tab_1">
                  <form action="/admin/general-setting/header" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-6">
                        <br>
                        <h5 style="float:right"> Subscriber Newslatter *</h5>
                      </div>
                      <div class="col-3">
                        <br>
                        <input type="text" name="subscribe" required value="@if($en) {{$en->subscribe}} @endif" class="form-control">
                      </div>
                      <div class="col-6">
                        <br>
                        <h5 style="float:right"> Title *</h5>
                      </div>
                      <div class="col-3">
                      <br>
                        <input type="text" name="email" required value="@if($en) {{$en->title}} @endif" class="form-control">
                      </div>
                      <div class="col-6">
                        <br>
                        <h5 style="float:right"> Email *</h5>
                      </div>
                      <div class="col-3">
                      <br>
                        <input type="email" name="email" required value="@if($en) {{$en->email}} @endif" class="form-control">
                      </div>
                      <div class="col-6">
                      <br>
                        <h5 style="float:right"> Phone No *</h5>
                      </div>
                      <div class="col-3">
                      <br>
                        <input type="text" name="phone" required value="@if($en) {{$en->phone}} @endif" class="form-control">
                      </div>
                      <div class="col-6">
                      <br>
                        <h5 style="float:right"> Copyright *</h5>
                      </div>
                      <div class="col-3">
                      <br>
                        <input type="text" name="copyright" required value="@if($en) {{$en->copyright}} @endif" class="form-control">
                      </div>
                    </div><br>
                    <button type="submit" class="btn btn-default generalsetting_admin">Submit</button><hr>
                    </div>
                  </form>
                </div>
                <div class="tab-pane p-v-sm" id="tab_2"  dir="rtl">
                  <form action="/admin/general-setting/header" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-6">
                        <br>
                        <h5 style="float:right"> Subscriber Newslatter ar *</h5>
                      </div>
                      <div class="col-3">
                        <br>
                        <input type="text" name="subscribe" required value="@if($ar) {{$ar->subscribe}} @endif" class="form-control">
                      </div>
                      <div class="col-6">
                        <br>
                        <h5 style="float:right"> Title *</h5>
                      </div>
                      <div class="col-3">
                      <br>
                        <input type="text" name="email" required value="@if($ar) {{$ar->title}} @endif" class="form-control">
                      </div>
                      <div class="col-6">
                        <br>
                        <h5 style="float:right"> Email *</h5>
                      </div>
                      <div class="col-3">
                      <br>
                        <input type="email" name="email" required value="@if($ar) {{$ar->email}} @endif" class="form-control">
                      </div>
                      <div class="col-6">
                      <br>
                        <h5 style="float:right"> Phone No *</h5>
                      </div>
                      <div class="col-3">
                      <br>
                        <input type="text" name="phone" required value="@if($ar) {{$ar->phone}} @endif" class="form-control">
                      </div>
                      <div class="col-6">
                      <br>
                        <h5 style="float:right"> Copyright *</h5>
                      </div>
                      <div class="col-3">
                      <br>
                        <input type="text" name="copyright" required value="@if($ar) {{$ar->copyright}} @endif" class="form-control">
                      </div>
                    </div><br>
                    <button type="submit" class="btn btn-default generalsetting_admin">Submit</button><hr>
                    </div>
                  </form>
                </div>
              </div>
            </center>
          </div> --}}
      </div>
    </div>
  </div>
@endsection