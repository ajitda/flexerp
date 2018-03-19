@extends('layouts.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Task List<a href="tasks/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>

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
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-list"></i> <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('tasks.edit', $task->id)}}"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                        <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['tasks.destroy', $task->id], 'class'=>'form-inline']) !!}
                                        {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                        {!! Form::close() !!}</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection