@extends('layouts.admin.app')

@section('assets-top')
<link href="{{ asset('assets/blog-admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/blog-admin/vendor/tinymce/tinymce.min.js') }}"></script>
<script>
    var editor_config = {
      path_absolute : "/",
      selector: '#textarea',
      height: 500,
      theme: 'modern',
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
      image_advtab: true,
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ],
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }
      
          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
      }
    };
    tinymce.init(editor_config);
</script>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Posts</a>
            </li>
            <li class="breadcrumb-item active">Add New</li>
        </ol>
        {!! Form::open(['route' => 'admin.posts.store', 'method' => 'POST']) !!}
            @include('admin.posts._form')
        {!! Form::close() !!}
    </div>
@endsection

@section('assets-bottom')
<script src="{{ asset('assets/blog-admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
<script>
    $(document).ready( function () {
        $("#datetime").datetimepicker({
            format: 'yyyy-mm-dd hh:ii:00',
            autoclose: true
        });
        $('#lfm').filemanager('image');
    });
</script>
@endsection