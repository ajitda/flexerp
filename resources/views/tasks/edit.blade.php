@extends('layouts.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Edit task<a href="{{route('task.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			{!! Form::model($task, ['method'=>'patch', 'action'=>['TaskController@update', $task], 'files'=> true]) !!}
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
					{!! Form::textarea('description', null, ['required', 'class'=>'form-control address', 'placeholder'=> 'Enter Task Description']) !!}
				</div>
				<div class="form-group col-sm-3">
					{!! Form::label('employee_id', 'Assigned To', ['class'=>'label']) !!}
					{!! Form::select('employee_id', $employees, null, ['required', 'class'=>'form-control']) !!}
				</div>
				<div class="form-group col-md-2">
					{!! Form::submit('Update Task', ['class'=> 'btn btn-primary task-submit']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection
