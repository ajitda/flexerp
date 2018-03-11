@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Course Enrolements List<a href="enrolements/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Course Name</th>
                        <th>Student Name</th>
                        <th>qty</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Payment</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($enrolements as $enrolement)
                        <tr>
                            <td>{{$enrolement->id}}</td>
                            <td>{{$enrolement->created_at->format('d-m-Y')}}</td>
                            <td><a href="enrolements/{{$enrolement->id}}/show">{{$enrolement->student->name}}</a></td>
                            <td><a href="enrolements/{{$enrolement->id}}/show">{{$enrolement->course->name}}</a></td>
                            <td>{{$enrolement->qty}}</td>
                            <td>{{$enrolement->price}}</td>
                            <td>{{$enrolement->discount}}</td>
                            <td>{{$enrolement->total}}</td>
                            <td>{{$enrolement->payment}}</td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-list"></i> <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="enrolements/{{$enrolement->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                                    
                                    <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                    <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['enrolements.destroy', $enrolement->id], 'class'=>'form-inline']) !!}
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