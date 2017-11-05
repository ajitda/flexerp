@extends('layouts.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Create a task</h1>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			{!! Form::open(['route'=>'tasks.store', 'files'=> true]) !!}
				<div class="form-group col-sm-6">
					{!! Form::label('name', ' Task Name', ['class'=>'bold']) !!}
					{!! Form::text('name', null, ['required', 'class'=>'form-control', 'placeholder'=> 'Enter Task Name']) !!}
				</div>
				<div class="form-group col-sm-3">
					{!! Form::date('due_date', \Carbon\Carbon::now(), ['required', 'class'=>'form-control']) !!}
				</div>
				<div class="form-group col-sm-3">
					{!! Form::select('status', ['pending'=> 'Pending', 'completed'=> 'Completed', ''], 'pending', ['required', 'class'=>'form-control']) !!}
				</div>
				<div class="form-group col-sm-12">
					{!! Form::textarea('description', null, ['required', 'class'=>'form-control address', 'placeholder'=> 'Enter Task Description']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection
