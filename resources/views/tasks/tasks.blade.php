@extends('layouts.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Task List</h1>
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>Sl.</th>
					<th>Task Name</th>
					<th>Description</th>
					<th>Assigned To</th>
					<th>Status</th>
				</thead>
			</table>
		</div>
	</div>
@endsection