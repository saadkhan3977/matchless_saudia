@extends('admin.layouts.master')
@section('page-title')
    Manage Interior Section 4
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

          <div class="box" style="height: 250px;">
            <div class="box-header">
            <h3>Manage Interior Section 4 Heading</h3><hr>
            @if(count($data) < '2')
            <a class="btn btn-icon generalsetting_admin" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i></a>
            <div class="modal fade" id="modal-id">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <ul class="nav nav-pills nav-sm">
                      <li class="nav-item active" @if($en) style="display: none" @endif>
                        <a class="nav-link generalsetting_admin" style="margin-right: 5px;" href data-toggle="tab" data-target="#tab_1">EN</a>
                      </li>
                      <li class="nav-item" @if($ar) style="display: none" @endif>
                        <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                      </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="tab-content">
                      <div class="tab-pane p-v-sm  @if(!$en && $ar) active @endif " id="tab_1">
                        <form role="form" method="post" action="{{url('/admin/interior/secfour_heading')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required="" name="title" placeholder="Enter Title">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                            <input type="text" class="form-control" id="exampleInputEmail1" required="" name="description" placeholder="Enter Text">
                          </div>

                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn generalsetting_admin">Save changes</button>
                          </form>
                        </div>
                      <div class="tab-pane p-v-sm @if(!$ar && $en) active @endif" id="tab_2" dir="rtl">
                        <form role="form" method="post" action="{{url('/admin/interior/secfour_heading')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">لقب</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">وصف</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                            <input type="text" class="form-control" id="exampleInputEmail1" required="" name="description" placeholder="أدخل النص">
                          </div>
                          <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
          <div class="table-responsive">
          <table class="table table-striped b-t">
            <thead>
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Language</th>
                <th>Manage</th>
              </tr>
            </thead>
          <tbody>
          @if($data)
          @foreach($data as $row)
          <tr>
            <td>{{$row->title}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->lang}}</td>
            <td style="display: flex;">
              {{-- <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="{{route('hospitality_consultancy.show',$row->id)}}"><i class="fa fa-edit "></i></a> --}}
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" data-toggle="modal" href='#modal-{{$row->id}}'><i class="fa fa-edit "></i></a>
              <div class="modal fade" id="modal-{{$row->id}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                    <ul class="nav nav-pills nav-sm">
                      <li class="nav-item active" @if($row->lang == 'ar') style="display: none" @endif>
                        <a class="nav-link generalsetting_admin" style="margin-right: 5px;" href data-toggle="tab" data-target="#tabb_{{$row->id}}">EN</a>
                      </li>
                      <li class="nav-item" @if($row->lang =='en') style="display: none" @endif>
                        <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tabbb_{{$row->id}}">AR</a>
                      </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="tab-content">
                      <div class="tab-pane p-v-sm  @if($row->ar) active @endif " id="tabb_{{$row->id}}">
                        <form role="form" method="post" action="{{url('/admin/interior/secfour_heading/'.$row->id)}}" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" value="{{$row->title}}" id="exampleInputEmail1" required="" name="title" placeholder="Enter Title">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                            <input type="text" class="form-control" value="{{$row->description}}" id="exampleInputEmail1" required="" name="description" placeholder="Enter Text">
                          </div>

                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn generalsetting_admin">Save changes</button>
                          </form>
                        </div>
                      <div class="tab-pane p-v-sm @if($row->en) active @endif" id="tabbb_{{$row->id}}" dir="rtl">
                        <form role="form" method="post" action="{{url('/admin/interior/secfour_heading/'.$row->id)}}" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                          <div class="form-group">
                            <label for="exampleInputEmail1">لقب</label>
                            <input type="text" class="form-control" value="{{$row->title}}" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">وصف</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                            <input type="text" class="form-control" value="{{$row->description}}" id="exampleInputEmail1" required="" name="description" placeholder="أدخل النص">
                          </div>
                          <button type="submit" class="btn white m-b generalsetting_admin">إرسال</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>

              <form method="post" action="{{url('/admin/interior/secfour_heading/'.$row->id)}}">
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
<hr>
<div class="box">
          <div class="box-header">
            <h3>Manage Interior Section 4</h3>
            <hr>
              <a href="{{route('interior_sec_four.create')}}" class="btn btn-icon generalsetting_admin"><i class="fa fa-plus"></i></a>
          </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Language</th>
            <th>Image</th>
            <th>Description Text</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          @if($secfour)
          <?php $id='1' ?>
          @foreach($secfour as $row)
          <tr>
            <td>{{$id++}}</td>
            <td>{{$row->title}}</td>
            <td>{{$row->lang}}</td>
            <td><img width="150" height="100" src="/uploads/interior/{{$row->image}}" alt="{{$row->title}}"></td>
            <td>{{$row->description}}</td>
            <td style="display: flex;">
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="{{route('interior_sec_four.show',$row->id)}}"><i class="fa fa-edit "></i></a>
              <form method="post" action="{{route('interior_sec_four.destroy',$row->id)}}">
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