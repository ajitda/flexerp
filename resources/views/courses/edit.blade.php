@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Course Registration Form<a href="{{route('courses.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::model($course,['method'=>'PATCH','action'=>['CourseController@update', $course], 'files'=>true]) !!}
                    <div class="form-group col-md-4">
                        {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Course Name')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::number('duration', null, array('required', 'class'=>'form-control', 'placeholder'=>'Course Duration')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::text('code', null, array('required', 'class'=>'form-control', 'placeholder'=>'Course Code')) !!}
                    </div>
                    <div class="form-group col-md-12" >
                        {!! Form::text('topics', null, array('required', 'class'=>'form-control', 'placeholder'=>'Topics Covered')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::number('sessions', null, array('required', 'class'=>'form-control', 'placeholder'=>'Total Sessions')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::number('fees', null, array('required', 'class'=>'form-control', 'placeholder'=>'Course Fee')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::file('image', null, array('required', 'class'=>'form-control', 'placeholder'=>'Select an Image')) !!}
                    </div>

                    <div class="form-group col-md-8">
                        {!! Form::textarea('description', null, array('required','id'=>'mytextarea', 'class'=>'form-control address', 'placeholder'=>'Course Description')) !!}
                    </div>
                    <div class="col-md-4">
                        <img src="../../{{$course->image}}" class="img-responsive img-rounded edit-img" alt="">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-3">
                        {!! Form::submit('Update Course', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection
@section('scripts')

    <script> 
    var editor_config = { path_absolute : "{{ URL::to('/') }}/", 
    selector : '#mytextarea', 
    plugins: [ "advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern" ], toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media", relative_urls: false, file_browser_callback : function(field_name, url, type, win) { var x = window.innerWidth || document.documentElement.clientWidth || document.getElementByTagName('body')[0].clientWidth; var y = window.innerHeight|| document.documentElement.clientHeight|| document.grtElementByTagName('body')[0].clientHeight; var cmsURL = editor_config.path_absolute+'laravel-filemanaget?field_name'+field_name; if (type = 'image') { cmsURL = cmsURL+'&type=Images'; } else { cmsUrl = cmsURL+'&type=Files'; } tinyMCE.activeEditor.windowManager.open({ file : cmsURL, title : 'Filemanager', width : x * 0.8, height : y * 0.8, resizeble : 'yes', close_previous : 'no' }); } }; tinymce.init(editor_config); 
    </script>
@endsection
