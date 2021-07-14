@extends('admin.layouts.master')
@section('page-title')
    Manage Tags
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
            @if(Session::has('errors'))
            <p class="alert alert-danger">{{ Session::get('errors') }}</p>
            @endif
            <h3>Manage Tags</h3>
            <hr>
            <a class="btn btn-default generalsetting_admin" data-toggle="modal" href='#modal-id'>Add</a>
            <div class="modal fade" id="modal-id">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <ul class="nav nav-pills nav-sm">
                      <li class="nav-item active" >
                        <a class="nav-link generalsetting_admin" style="margin-right: 5px" href data-toggle="tab" data-target="#tab_1">EN</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                      </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="tab-content">      
                    {{-- English Form Start --}}
                    <div class="tab-pane p-v-sm active" id="tab_1">
                      <form role="form" method="post" action="{{route('blog_tags.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                          </div>                
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-default generalsetting_admin">Save changes</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane p-v-sm" id="tab_2" dir="rtl">
                      <form role="form" method="post" action="{{route('blog_tags.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">لقب</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="أدخل العنوان">
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
          </div>
    
    <div class="table-responsive" style="height: 100%">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
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
            <td style="display: flex;">
              {{-- <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" href="/admin/blog_tags/{{$row->id}}"><i class="fa fa-edit "></i></a> --}}
              <a style="margin-right: 10px;" class="btn btn-default generalsetting_admin" data-toggle="modal" href='#modal-heading-{{$row->id}}'>Edit</a>
              <div class="modal fade" id="modal-heading-{{$row->id}}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <ul class="nav nav-pills nav-sm">
                        <li class="nav-item active" @if($row->lang =='ar') style="display: none" @endif>
                          <a class="nav-link generalsetting_admin" style="margin-right: 5px" href data-toggle="tab" data-target="#tab_1">EN</a>
                        </li>
                        <li class="nav-item " @if($row->lang =='en') style="display: none" @endif>
                          <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                        </li>
                      </ul>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="tab-content">      
                      {{-- English Form Start --}}
                      <div class="tab-pane p-v-sm  @if($row->lang != 'ar' && $row->lang == 'en') active @endif " id="tab_1">
                        <form role="form" method="post" action="{{route('blog_tags.update',$row->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" value="{{$row->title}}">
                          </div>                
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-default generalsetting_admin">Save changes</button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane p-v-sm @if($row->lang !='en' && $row->lang =='ar') active @endif" id="tab_2" dir="rtl">
                      <form role="form" method="post" action="{{route('blog_tags.update',$row->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">لقب</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" value="{{$row->title}}">
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
              <form method="post" action="{{route('blog_tags.destroy',$row->id)}}">
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