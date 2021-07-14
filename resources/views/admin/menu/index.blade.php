@extends('admin.layouts.master')
@section('page-title')
    Header Menu
@endsection
@section('mainContent')
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div ui-view class="app-body" id="view">
      <div class="p-a white lt box-shadow">
          <div class="row">
              <div class="col-sm-6">
                  <h4 class="mb-0 _300">Welcome to MLS</h4>
              </div>
          </div>
      </div>
      <div class="padding">
          <div class="row">
          {!! Menu::render() !!}
          </div>    
      </div>
    </div>
  </div>
@endsection
