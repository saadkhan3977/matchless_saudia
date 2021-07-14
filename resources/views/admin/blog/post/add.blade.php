@extends('admin.layouts.master')
@section('page-title')
    Create Blog 
@endsection
@section('mainContent')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<style>
  .note-editor.note-airframe .note-editing-area .note-editable, .note-editor.note-frame .note-editing-area .note-editable
  {
    height: 150px;
  }
</style>
{{-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#test").multiselect({ width: '230px', defaultText : 'Select Below', height:'250px' });
        });
    </script> --}}
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
              <h3>Create Blog</h3>
              <ul class="nav nav-pills nav-sm">
                <li class="nav-item active">
                  <a class="nav-link generalsetting_admin" style="margin-right: 5px;" href data-toggle="tab" data-target="#tab_1">EN</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                </li>
              </ul><hr>
              <div class="tab-content">      
                {{-- English Form Start --}}
                <div class="tab-pane p-v-sm active" id="tab_1">
                  <form role="form" method="post" action="{{route('blog.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Image</label>
                          <div class="col-sm-10">
                            <div class="form-file">
                              <input type="file" name="image" required="">
                              <button class="btn white generalsetting_admin">Select file ...</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Background Cover Image</label>
                        <div class="col-sm-10">
                          <div class="form-file">
                            <input type="file" name="bg_image" required="">
                            <button class="btn white generalsetting_admin">Select file ...</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Company Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="company" required="" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" required="" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category</label>
                          <select id="test" name="category_id" class="form-control" required="">
                            <option value="">::select category::</option>
                            @if($categories)
                            @foreach($categories as $row)
                            @if($row->lang =='en')
                            <option value="{{$row->id}}">{{$row->title}}</option>
                            @endif
                            @endforeach
                            @endif
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Keyword</label>
                          {{-- <input type="text" class="form-control"  id="search" name="keyword" required=""> --}}
                          <select name="keyword[]" id="framework" required class="form-control selectpicker" data-live-search="true" multiple>
                            <option value="" disabled="">::Select::</option>
                            @if($tags)
                            @foreach($tags as $row)
                            @if($row->lang =='en')
                            <option value="{{$row->id}}">{{$row->title}}</option>
                            @endif
                            @endforeach
                            @endif
                          </select>
                        </div>
                        <div class="row">
                          <div class="col-3">
                            <div class="form-group">
                              <label class="form-control-label">Feature</label><br>
                              <div class="col-sm-10 row">      
                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <label class="ui-switch generalsetting_admin m-t-xs m-r">
                                      <input type="checkbox" name="feature">
                                      <i></i>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="form-group">
                              <label class="form-control-label">Event</label><br>
                              <div class="col-sm-10 row">      
                                {{-- <label class="ui-switch generalsetting_admin m-t-xs m-r">
                                  <input type="checkbox" name="event">
                                  <i></i>
                                </label> --}}
                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <label class="ui-switch generalsetting_admin m-t-xs m-r">
                                      <input type="checkbox" name="event">
                                      <i></i>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Facebook</label>
                          <input type="text" class="form-control" required="" id="exampleInputEmail1" name="facebook" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Twitter</label>
                          <input type="text" class="form-control" required="" id="exampleInputEmail1" name="twitter" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Instagram</label>
                          <input type="text" class="form-control" required="" id="exampleInputEmail1" name="instagram" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Linkedin</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" required="" name="linkedin" >
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Content</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                          <textarea required="" name="content" class="form-control summernote" ></textarea>
                        </div>
                      </div>
                      
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                    <a href="{{ route('blog.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
                  </form>
                </div>
                <div class="tab-pane p-v-sm" id="tab_2"  dir="rtl">
                  <form role="form" method="post" action="{{route('blog.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Image</label>
                          <div class="col-sm-10">
                            <div class="form-file">
                              <input type="file" name="image" required="">
                              <button class="btn white generalsetting_admin">Select file ...</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Background Cover Image</label>
                        <div class="col-sm-10">
                          <div class="form-file">
                            <input type="file" name="bg_image" required="">
                            <button class="btn white generalsetting_admin">Select file ...</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label for="exampleInputEmail1">اسم الشركة</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="company" required="" placeholder="اسم الشركة">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">وصف</label>
                          <textarea name="description" required="" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                      </div>
                        
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">فئة</label>
                          <select id="test" name="category_id" class="form-control" required="">
                            <option value="">::اختر الفئة::</option>
                            @if($categories)
                            @foreach($categories as $row)
                            @if($row->lang =='ar')
                            <option value="{{$row->id}}">{{$row->title}}</option>
                            @endif
                            @endforeach
                            @endif
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">الكلمة الرئيسية</label>
                          {{-- <input type="text" class="form-control"  id="search" name="keyword" required=""> --}}
                          <select name="keyword[]" id="framework" required class="form-control selectpicker" data-live-search="true" multiple>
                          <option value="" disabled="">::حدد الكلمة الرئيسية::</option>
                          @if($tags)
                          @foreach($tags as $row)
                          @if($row->lang =='ar')
                          <option value="{{$row->id}}">{{$row->title}}</option>
                          @endif
                          @endforeach
                          @endif
                         </select>
                        </div>
                        <div class="row">
                          <div class="col-3">
                            <div class="form-group">
                              <label class="form-control-label">ميزة</label><br>
                              <div class="col-sm-10 row">      
                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <label class="ui-switch generalsetting_admin m-t-xs m-r" dir="ltr">
                                      <input type="checkbox" name="feature">
                                      <i></i>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="form-group">
                              <label class="form-control-label">حدث</label><br>
                              <div class="col-sm-10 row">      
                                {{-- <label class="ui-switch generalsetting_admin m-t-xs m-r">
                                  <input type="checkbox" name="event">
                                  <i></i>
                                </label> --}}
                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <label class="ui-switch generalsetting_admin m-t-xs m-r" dir="ltr">
                                      <input type="checkbox" name="event">
                                      <i></i>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Facebook</label>
                          <input type="text" class="form-control" required="" id="exampleInputEmail1" name="facebook" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Twitter</label>
                          <input type="text" class="form-control" required="" id="exampleInputEmail1" name="twitter" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Instagram</label>
                          <input type="text" class="form-control" required="" id="exampleInputEmail1" name="instagram" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group" >
                          <label for="exampleInputEmail1">Linkedin</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" required="" name="linkedin" >
                        </div>
                      </div>
                      <div class="col-md-12">
                      <div class="form-group" >
                          <label for="exampleInputEmail1">محتوى</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                          <textarea  required="" name="content" class="form-control summernote" ></textarea>
                        </div>
                    </div>
                    </div>
                    
                    <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                    <a href="{{ route('blog.index') }}" class="btn white m-b generalsetting_admin">إلغاء</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection