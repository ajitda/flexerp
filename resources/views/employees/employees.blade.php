@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Employees List<a href="employees/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
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
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-list"></i> <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="employees/{{$employee->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                                        
                                        <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                        <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['employees.destroy', $employee->id], 'class'=>'form-inline']) !!}
                                        {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                        {!! Form::close() !!}</a></li>

                                        </ul>
                                </div>
                            </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection