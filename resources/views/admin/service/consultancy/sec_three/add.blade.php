@extends('admin.layouts.master')
@section('page-title')
    Create Consultancy Section 2
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
              <h3>Create Consultancy Section 2</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active">
                  <a class="nav-link generalsetting_admin" style="margin-right: 5px;" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul>
              <hr>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm  active  " id="tab_1">
                  <form role="form" method="post" action="{{route('consultancy_sec_three.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Business</label>
                      <select id="input" class="form-control" required="required" name="business_id">
                        <option value="">Select Business</option>
                        @foreach($businessen as $row)
                        <option value="{{$row->id}}">{{$row->title}}</option>
                        @endforeach
                      </select>
                      {{-- <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title"> --}}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                      <textarea name="description" id="inputDescription" class="form-control" rows="3" required="required"></textarea>
                    </div>
                    <a href="{{ route('consultancy_sec_three.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>

                  </form>
                </div>
                <div class="tab-pane p-v-sm" id="tab_2"  dir="rtl">
                  <form role="form" method="post" action="{{route('consultancy_sec_three.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">اعمال</label>
                      <select id="input" class="form-control" required="required" name="business_id">
                        <option value="">حدد الأعمال</option>
                        @foreach($businessar as $row)
                        <option value="{{$row->id}}">{{$row->title}}</option>
                        @endforeach
                      </select>
                      {{-- <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title"> --}}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <textarea name="description" id="inputDescription" class="form-control" rows="3" required="required"></textarea>
                    </div>
                    
                    <a href="{{ route('consultancy_sec_three.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection