@extends('admin.layouts.master')
@section('page-title')
    Create Project Gallery
@endsection
@section('mainContent')
<style type="text/css">
.mydivoutermulti{
  position: relative;
  width: 130px;
  height: 95px;
  float: left;
  margin-right: 15px;
}
.buttonoverlapmulti{
  position: absolute;
  z-index: 2;
  top: 35px;
  display: none;
  left: 40px;
}
.mydivoutermulti:hover .buttonoverlapmulti{ 
  display:block;
}
</style>
<link rel="stylesheet" href="/admin/dropzone-5.7.0/dist/dropzone.css">
 <script src="/admin/dropzone-5.7.0/dist/dropzone.js"></script>


    
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
              <form method="post" enctype="multipart/form-data" action="/admin/project-gallery_store/{{$id}}"class="dropzone"id="my-awesome-dropzone">@csrf</form>
            </div>
          </div>
            <div class="main-div">
            @if($gallerys)
            @foreach($gallerys as $gallery)
              
            <div class="mydivoutermulti hide-{{$gallery->id}}" style="background-image: url('/uploads/gallery/{{$gallery->image}}');background-size: cover;"> 
            <button class="buttonoverlapmulti btn generalsetting_admin" onclick="myconfirm({{$gallery->id}})" type="button" id="x"><i class="fa fa-trash"></i></button>
            </div>
            @endforeach
            @endif
            </div>
        </div>
      </div>
</div>

<script type="text/javascript">
   var myDropzone = new Dropzone("#my-awesome-dropzone", { 
       maxFilesize: 10,
       success: function (file, response) {
        $.ajax({
            url: "/admin/project-gallery_show/",
            type: "get",
            cache: false,
            dataType: 'json',
            success: function(dataResult) 
            {
              location.reload();
            }
       });
      }
    });


  function myconfirm(argument) {
  // confirm('Dialogue');
    if (confirm('Are You Sure??')) {
      // alert('true');
      $('.hide-'+argument).hide();
      $.get('/admin/project-gallery_delete/'+argument, 
        function( data ) 
        {
        }
      );
    }
  }
  // 
  
</script>
@endsection
