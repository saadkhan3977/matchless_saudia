@extends('admin.layouts.master')
@section('page-title')
    Manage Blog Page
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
            <h3>Page Detail</h3>
            <br>
            @if(count($headingdata) < '2')
            <a class="btn btn-default generalsetting_admin" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i></a>
            <div class="modal fade" id="modal-id">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <ul class="nav nav-pills nav-sm">
                      <li class="nav-item active"  @if($en) style="display: none" @endif>
                        <a class="nav-link generalsetting_admin" style="margin-right: 5px" href data-toggle="tab" data-target="#tab_1">EN</a>
                      </li>
                      <li class="nav-item" @if($ar) style="display: none" @endif>
                        <a class="nav-link generalsetting_admin" href data-toggle="tab" data-target="#tab_2">AR</a>
                      </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="tab-content">      
                    {{-- English Form Start --}}
                    <div class="tab-pane p-v-sm @if($ar) active @endif" id="tab_1">
                      <form role="form" method="post" action="{{route('blog_page.store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Image</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="en" hidden="">
                          <input type="file" class="form-control" id="exampleInputEmail1" name="image" required="" placeholder="Enter Title">
                        </div>                
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-default generalsetting_admin">Save changes</button>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane p-v-sm @if($en) active @endif" id="tab_2" dir="rtl">
                    <form role="form" method="post" action="{{route('blog_page.store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">لقب</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">صورة</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="ar" hidden="">
                          <input type="file" class="form-control" id="exampleInputEmail1" name="image" required="" placeholder="Enter Title">
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
                  <th>Description</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @if($headingdata)
                @foreach($headingdata as $row)
                <tr>
                  <td>{{$row->title}}</td>
                  <td><img src="/uploads/blog/{{$row->image}}" alt="{{$row->title}}" width="100"></td>
                  <td>
                    <a class="btn btn-default generalsetting_admin" data-toggle="modal" href='#modal-heading-{{$row->id}}'>Edit</a>
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
                              <form role="form" method="post" action="/admin/blog_page/{{$row->id}}" enctype="multipart/form-data">
                              @csrf
                              @method('put')
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Title</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" value="{{$row->title}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Image</label>
                                  <input type="file" class="form-control" id="exampleInputEmail1" name="image" >
                                </div>                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-default generalsetting_admin">Save changes</button>
                              </div>
                            </form>
                          </div>
                          <div class="tab-pane p-v-sm @if($row->lang !='en' && $row->lang =='ar') active @endif" id="tab_2" dir="rtl">
                            <form role="form" method="post" action="/admin/blog_page/{{$row->id}}" enctype="multipart/form-data">
                              @csrf
                              @method('put')
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">لقب</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="title" required="" value="{{$row->title}}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">صورة</label>
                                  <input type="file" class="form-control" id="exampleInputEmail1" name="image" >
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
@endsection