@extends('admin.layouts.master')
@section('page-title')
    Edit Project Page Text Section
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
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('text.update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$data->description}}</textarea>
                    </div>
                    
                    <a href="{{route('text.index')}}"> <button class="btn white m-b generalsetting_admin">Cancel</button></a>
                    <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                  </form>
                </div>
                <div class="tab-pane p-v-sm @if($data->lang == 'ar') active @endif" dir="rtl" id="tab_2">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{route('text.update',$data->id)}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="exampleInputEmail1">وصف</label>
                      <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$data->description}}</textarea>
                    </div>
                    <a href="{{route('text.index')}}"> <button class="btn white m-b generalsetting_admin">يلغي</button></a>
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