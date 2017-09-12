@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Employees List<a href="employees/create" class="pull-right create-button"><span class="glyphicon-plus"></span></a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Employee Name</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Image</th>
                        <th>Created By</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->created_at->format('d-m-Y')}}</td>
                            <td><a href="employees/{{$employee->id}}/show">{{$employee->name}}</a></td>
                            <td>{{$employee->designation}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->mobile}}</td>
                            <td><img class="img-responsive list-img" src="{{$employee->image}}" alt="" /></td>
                            <td>{{$employee->user->name}}</td>
                            <td><a href="employees/{{$employee->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['employees.destroy', $employee->id]]) !!}
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