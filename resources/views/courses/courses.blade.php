@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Courses List<a href="courses/create" class="pull-right create-button"><span class="glyphicon glyphicon-plus"></span></a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Course Name</th>
                        <th>Duration</th>
                        <th>Code</th>
                        <th>Sessions</th>
                        <th width="300">Topics</th>
                        <th>Fees</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->created_at->format('d-m-Y')}}</td>
                            <td><a href="courses/{{$course->id}}/show">{{$course->name}}</a></td>
                            <td>{{$course->duration}}</td>
                            <td>{{$course->code}}</td>
                            <td>{{$course->sessions}}</td>
                            <td>{{$course->topics}}</td>
                            <td>{{$course->fees}}</td>
                            <td><a href="courses/{{$course->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['courses.destroy', $course->id]]) !!}
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