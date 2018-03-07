@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Student Info<a href="{{route('students.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
			<div class="panel-body">
				<h3>Name : {{$student->name}}</h3>
				<hr>
				<p><b>Email :</b> {{$student->email}}</p>
				<p><b>Father's Name:</b> {{$student->fathers_name}}</p>
				<p><b>Mother's Name:</b> {{$student->mothers_name}}</p>
				<p><b>Date of Birth:</b> {{$student->date_of_birth}}</p>
				<p><b>Occupation:</b> {{$student->occupation}}</p>
				<p><b>Address:</b> {{$student->address}}</p>
				<p><b>Mobile:</b> {{$student->mobile}}</p>
			</div>
        </div>
    </div>
@endsection