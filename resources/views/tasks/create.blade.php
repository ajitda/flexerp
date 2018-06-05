@extends('layouts.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Create a task<a href="{{route('tasks.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			{!! Form::open(['route'=>'tasks.store', 'files'=> true, 'novalidate']) !!}
				<div class="form-group col-sm-6">
					{!! Form::label('name', ' Task Name', ['class'=>'label']) !!}
					{!! Form::text('name', null, ['required', 'class'=>'form-control', 'placeholder'=> 'Enter Task Name', 'id'=> 'name']) !!}
				</div>
				<div class="form-group col-sm-3">
					{!! Form::label('due_date', 'Select a date', ['class'=>'label']) !!}
					{!! Form::date('due_date', \Carbon\Carbon::now(), ['required', 'class'=>'form-control']) !!}
				</div>
				<div class="form-group col-sm-3">
					{!! Form::label('status', 'Select a status', ['class'=>'label']) !!}
					{!! Form::select('status', ['pending'=> 'Pending', 'completed'=> 'Completed', 'later'=>'Do Later'], null, ['required', 'class'=>'form-control']) !!}
				</div>
				<div class="form-group col-sm-12">
					{!! Form::textarea('description', null, ['required', 'class'=>'form-control address', 'id'=>'mytextarea', 'placeholder'=> 'Enter Task Description']) !!}
				</div>
				<div class="form-group col-sm-3">
					{!! Form::label('employee_id', 'Assigned To', ['class'=>'label']) !!}
					{!! Form::select('employee_id', $employees, null, ['required', 'class'=>'form-control']) !!}
				</div>
				<div class="form-group col-md-2">
					{{--{!! Form::submit('Create Task', ['class'=> 'btn btn-primary task-submit']) !!}--}}
					<button type="submit" class="btn btn-primary task-submit">Create Task</button>
				</div>
			{!! Form::close() !!}
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