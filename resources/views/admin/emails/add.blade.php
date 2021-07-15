@extends('admin.layouts.master')
@section('page-title')
    Create Email
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
              <h3>Create Email</h3>
              <hr>
              <form role="form" method="post" action="{{route('emails.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" required="" id="exampleInputEmail1" name="email" placeholder="Enter Email">
                </div>
                <button type="submit" class="btn white m-b generalsetting_admin">Submit</button>
                <a href="{{ route('emails.index') }}" class="btn white m-b generalsetting_admin">Cancel</a>
              </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection