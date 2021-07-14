@extends('admin.layouts.master')
@section('page-title')
    Manage Team
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
            <h3>Page Title</h3>
            <hr>
            {{-- @if(!$data) --}}
              {{-- <a href="{{route('team_title.create')}}" class="btn btn-icon generalsetting_admin"><i class="fa fa-plus"></i></a> --}}
              @if(!$en && !$ar)
              <a class="btn btn-icon generalsetting_admin" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i></a>
              @endif
              <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <ul class="nav nav-pills nav-sm">
                        <li class="nav-item active" @if($en) style="display: none" @endif>
                          <a class="nav-link generalsetting_admin" style="margin-right: 5px" href data-toggle="tab" data-target="#tab_1">EN</a>
                        </li>
                        <li class="nav-item" @if($ar) style="display: none" @endif>
                          <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                        </li>
                      </ul><hr>
                      <h4 class="modal-title"></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="tab-content">      
                      <div class="tab-pane p-v-sm  @if(!$en) active @endif " id="tab_1">
                        <form role="form" method="post" action="{{route('team_title.store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                              <input type="text" hidden="" class="form-control" id="exampleInputEmail1" name="lang" value="en">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary  generalsetting_admin">Save changes</button>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane p-v-sm  @if(!$en) active @endif " id="tab_2" dir="rtl">
                        <form role="form" method="post" action="{{route('team_title.store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">لقب</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
                              <input type="text" hidden="" class="form-control" id="exampleInputEmail1" name="lang" value="ar">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                            <button type="submit" class="btn btn-primary  generalsetting_admin">إرسال</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($teamtitle as $row)
                  <tr>
                    <td>{{ $row->title }}</td>
                    <td>
                      <button type="button" class="btn btn-default generalsetting_admin" data-toggle="modal" href='#modal-{{$row->id}}' data-dismiss="modal"><i class="fa fa-edit"></i></button>
                      <div class="modal fade" id="modal-{{$row->id}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <ul class="nav nav-pills nav-sm">
                                <li class="nav-item active" @if($row->lang =='ar') style="display: none" @endif>
                                  <a class="nav-link generalsetting_admin" style="margin-right: 5px" href data-toggle="tab" data-target="#tab_1">EN</a>
                                </li>
                                <li class="nav-item" @if($row->lang =='en') style="display: none" @endif>
                                  <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                                </li>
                              </ul><hr>
                              <h4 class="modal-title"></h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="tab-content">      
                              <div class="tab-pane p-v-sm  @if($row->lang=='en') active @endif " id="tab_1">
                                <form role="form" method="post" action="{{route('team_title.update',$row->id)}}" enctype="multipart/form-data">
                                  @csrf
                                  @method('put')
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Title</label>
                                      <input type="text" class="form-control" value="{{ $row->title }}" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                                      <input type="text" hidden="" class="form-control" id="exampleInputEmail1" name="lang" value="en">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary  generalsetting_admin">Save changes</button>
                                  </div>
                                </form>
                              </div>
                              <div class="tab-pane p-v-sm  @if($row->lang=='ar') active @endif " id="tab_2" dir="rtl">
                                <form role="form" method="post" action="{{route('team_title.update',$row->id)}}" enctype="multipart/form-data">
                                  @csrf
                                  @method('put')
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">لقب</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $row->title }}" name="title" required="" placeholder="أدخل العنوان">
                                      <input type="text" hidden="" class="form-control" id="exampleInputEmail1" name="lang" value="ar">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                                    <button type="submit" class="btn btn-primary  generalsetting_admin">إرسال</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            {{-- @endif --}}
          </div><hr>
        </div>
          <div class="box">
          <div class="box-header">
            <h3>Manage Team</h3>
            <hr>
              <a href="{{route('team.create')}}" class="btn btn-icon generalsetting_admin"><i class="fa fa-plus"></i></a>
          </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Positionk</th>
            <th>Facebook</th>
            <th>Twitter </th>
            <th>Linkedin</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          @if($data)
          <?php $id='1' ?>
          @foreach($data as $row)
          <tr>
            <td>{{$id++}}</td>
            <td>{{$row->title}}</td>
            <td><img width="150" height="100" src="/uploads/team/{{$row->image}}" alt="{{$row->title}}"></td>
            <td>{{$row->position}}</td>
            <td>{{$row->facebook_link}}</td>
            <td>{{$row->twitter_link}}</td>
            <td>{{$row->linkedin_link}}</td>
            <td style="display: flex;">
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="{{route('team.show',$row->id)}}"><i class="fa fa-edit "></i></a>
              <form method="post" action="{{route('team.destroy',$row->id)}}">
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