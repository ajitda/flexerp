@extends('layouts.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>{{$task->name}}<a href="{{route('tasks.edit')}}" class="pull-right create-button"><span class="glyphicon-pencil"></span></a></h1>

		</div>
		<div class="panel-body">
			<p>{{$task->description}}</p>
		</div>
	</div>
@endsection