@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Create a task</h1>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			{!! Form::open(['route'=>'tasks.store', 'files'=> true]) !!}
				<div class="form-group col-md-6">
					{!! Form::text($name, null, ['required', 'class'=>'form-control', 'placeholder'=> 'Enter Text Name']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection
