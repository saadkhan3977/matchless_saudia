@extends('admin.layouts.master')
@section('page-title')
    Manage Career
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

          <div class="box">
          <div class="box-header">
            <h3>Heading</h3>
            <br>
            @if( count($headingdata) < '2')
            <a class="btn btn-default generalsetting_admin" data-toggle="modal" href='#modal-id'>Add</a>
            <div class="modal fade" id="modal-id">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                  {{-- <h3>Language</h3> --}}
                    <ul class="nav nav-pills nav-sm">
                      <li class="nav-item active" @if($en) style="display: none;" @endif>
                        <a class="nav-link generalsetting_admin" href data-toggle="tab" style="margin-right:5px" data-target="#tab_1">EN</a>
                      </li>
                      <li class="nav-item" @if($ar) style="display: none" @endif>
                        <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                      </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="tab-content">      
                    {{-- English Form Start --}}
                    <div class="tab-pane p-v-sm  @if(!$en && $ar) active @endif " id="tab_1">
                      <form role="form" method="post" action="/admin/career/sec_four_heading" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sub Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                          <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" required="" placeholder="Enter Title">
                        </div>                
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-default generalsetting_admin">Save changes</button>
                      </div>
                    </form>
                  </div>
                <div class="tab-pane p-v-sm @if(!$ar && $en) active @endif" id="tab_2" dir="rtl">
                  <form role="form" method="post" action="/admin/career/sec_four_heading" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">لقب</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">العنوان الفرعي</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                      <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" required="" placeholder="أدخل العنوان الفرعي">
                    </div>                
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">يغلق</button>
                    <button type="submit" class="btn btn-default generalsetting_admin">احفظ التغييرات</button>
                  </div>
                  </form>
                </div>
              </div>
                </div>
              </div>
            </div>
            @endif
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach($headingdata as $headingrow)
                <tr>
                  <td>{{$headingrow->title}}</td>
                  <td>{{$headingrow->sub_title}}</td>
                  <td>
                    <a class="btn btn-default generalsetting_admin" data-toggle="modal" href='#modal-{{$headingrow->id}}'>Edit</a>
                    <div class="modal fade" id="modal-{{$headingrow->id}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <form role="form" method="post" action="/admin/career/sec_two_heading/{{$headingrow->id}}" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" value="{{$headingrow->title}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Sub Title</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="sub_title" value="{{$headingrow->sub_title}}" required="">
                            </div>                
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-default generalsetting_admin">Save changes</button>
                          </div>
                      </form>
                        </div>
                      </div>
                    </div></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <hr>
    <h3>Manage Career</h3>
            <hr>
            @if(count($data) < '6')
              <a href="/admin/career/sec_four/create" class="btn btn-icon generalsetting_admin"><i class="fa fa-plus"></i></a>
            <hr>
            @endif
          </div>
    <div class="table-responsive">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          @if($data)
          @foreach($data as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->title}}</td>
            <td><img width="150" height="100" src="/uploads/career/{{$row->image}}" alt="{{$row->title}}"></td>
            <td>{{$row->description}}</td>
            <td style="display: flex;">
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="/admin/career/sec_four/{{$row->id}}"><i class="fa fa-edit "></i></a>
              <form method="post" action="/admin/career/sec_four/{{$row->id}}">
                @csrf
                @method('delete')
              <button type="submit" onclick="return confirm('Are You Sure Want To Delete This..??')" class="btn btn-default generalsetting_admin"><i class="fa fa-trash "></i></button>
              </form>
            </td>
          </tr>
          @endforeach
          @endif

        </tbody>
      </table>
    </div>
    
  </div>
      </div>
    </div>
  </div>
@endsection