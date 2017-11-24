@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Students List<a href="students/create" class="pull-right create-button"><span class="glyphicon glyphicon-plus"></span></a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Student Name</th>
                        <th>Fathers Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Image</th>
                        <th>Created By</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->created_at->format('d-m-Y')}}</td>
                            <td><a href="students/{{$student->id}}/show">{{$student->name}}</a></td>
                            <td>{{$student->fathers_name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->mobile}}</td>
                            <td><img class="img-responsive list-img" src="{{$student->image}}" alt="" /></td>
                            <td>{{$student->user->name}}</td>
                            <td><a href="students/{{$student->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['students.destroy', $student->id]]) !!}
                                {!! Form::submit('X', ['class'=> 'btn btn-danger btn-small']) !!}
                                {!! Form::close() !!}</a>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection