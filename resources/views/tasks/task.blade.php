@extends('layouts.app')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="row">
			<div class="col-sm-10">
				<h3>{{$task->name}} </h3>
			</div>
			<div class="col-sm-2">
				@if($task->status == 'completed')
				<div class="pull-right create-button"><span class="glyphicon glyphicon-ok"></span>
				</div>
				@else
				<div class="completed-btn">
					{!! Form::open(['route'=>['tasks.update', $task->id], 'method'=>'PUT']) !!}
					<!-- <a href="tasks/create" class="pull-right create-button"><span class="glyphicon glyphicon-plus"></span></a> -->
					{!! Form::hidden('status', 'completed', []) !!}
					{!! Form::submit('Mark as completed', ['class'=> 'btn btn-warning']) !!}
					{!! Form::close() !!}
				</div>
				@endif
			</div>
		</div>
		
	</div>
	<div class="date-filter">
		<div class="col-sm-4">
			<h4>Assigned To : <b>{{$task->employee->name}}</b></h4>
		</div>
		<div class="col-sm-4">
			<h4>Due Date : <b>{{$task->due_date}}</b></h4>
		</div>
		<div class="col-sm-4">
			<h4>Job Status : <b>{{$task->status}}</b></h4>
		</div>
	</div>
	<div class="panel-body">
		<p>{{$task->description}}</p>
	</div>
</div>
@endsection