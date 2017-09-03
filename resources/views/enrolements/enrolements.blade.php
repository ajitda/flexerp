@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Course Enrolements List<a href="enrolements/create" class="pull-right create-button"><span class="glyphicon-plus"></span></a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Course Name</th>
                        <th>Student Name</th>
                        <th>qty</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Comments</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($enrolements as $enrolement)
                        <tr>
                            <td>{{$enrolement->id}}</td>
                            <td>{{$enrolement->created_at->format('d-m-Y')}}</td>
                            <td><a href="enrolements/{{$enrolement->id}}/show">{{$enrolement->name}}</a></td>
                            <td>{{$enrolement->duration}}</td>
                            <td>{{$enrolement->code}}</td>
                            <td>{{$enrolement->sessions}}</td>
                            <td>{{$enrolement->topics}}</td>
                            <td>{{$enrolement->fees}}</td>
                            <td><a href="enrolements/{{$enrolement->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['enrolements.destroy', $enrolement->id]]) !!}
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