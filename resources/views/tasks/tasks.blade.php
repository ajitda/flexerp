@extends('layouts.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Task List<a href="tasks/create" class="pull-right create-button"><span class="glyphicon glyphicon-plus"></span></a></h1>

		</div>
		<div class="panel-body">
			<table class="table table-bordered table-striped table-hover task-lists">
				<thead>
					<th>Sl.</th>
					<th>Task Name</th>
					<th>Due Date</th>
					<th>Assigned To</th>
					<th>Status</th>
					<th colspan="2">Action</th>
				</thead>
				<tbody>
					@foreach($tasks as $task)
					<tr>
						<td>{{$task->id}}</td>
						<td><b><a href="tasks/{{$task->id}}">{{$task->name}}</a></b></td>
						<td>{{$task->due_date}}</td>
						<td>{{$task->employee->name}}</td>
						<td>{{$task->status}}</td>
						<td><a href="tasks/{{$task->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                        <td><a href="#" onclick="return confirm('are you sure?')">
                            {!! Form::open(['method'=> 'DELETE', 'route'=>['tasks.destroy', $task->id]]) !!}
                            {!! Form::submit('X', ['class'=> 'btn btn-danger btn-small']) !!}
                            {!! Form::close() !!}</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection