@extends('admin.layouts.master')
@section('page-title')
    Create Contact Form Section
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
              <h3>Language</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active" @if($en) style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" style="margin-right: 5px" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item" @if($ar) style="display: none" @endif>
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm  @if(!$en && $ar) active @endif " id="tab_1">
                  <form role="form" method="post" action="{{route('form.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <input name="name" required="" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input name="email" required="" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Enter Phone No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subject</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="subject" placeholder="Enter Subject">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Message</label>
                      <input name="description" required="" class="form-control" placeholder="Enter Message">
                    </div>   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Enter Submit Text</label>
                      <input name="submit" required="" class="form-control" placeholder="Enter Submit Text">
                    </div>                 
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                  </form>
                </div>
                <div class="tab-pane p-v-sm @if(!$ar && $en) active @endif" id="tab_2"  dir="rtl">
                  <form role="form" method="post" action="{{route('form.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">اسم</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <input name="name" required="" class="form-control" placeholder="أدخل الاسم">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">بريد إلكتروني</label>
                      <input name="email" required="" class="form-control" placeholder="أدخل البريد الإلكتروني">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">هاتف</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="أدخل الهاتف">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">موضوع</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="subject" placeholder="أدخل الموضوع">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رسالة</label>
                      <input name="description" required="" class="form-control" placeholder="أدخل رسالة">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">إرسال</label>
                      <input name="submit" required="" class="form-control" placeholder="أدخل إرسال">
                    </div>                    
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection