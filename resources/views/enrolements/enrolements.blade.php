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
                                    <li><a href="#" data-toggle="modal" data-target="#myModal{{$enrolement->id}}"><i class="fa fa-pencil"></i> Payment</a></li>
                                    
                                    <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                    <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['enrolements.destroy', $enrolement->id], 'class'=>'form-inline']) !!}
                                    {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                    {!! Form::close() !!}</a></li>

                                    </ul>
                                </div>
                                <div class="modal fade" id="myModal{{$enrolement->id}}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Add Payment</h4>
                                            </div>
                                            <div class="modal-body">
                                                {!! Form::open(['route'=>'paymenet.store']) !!}
                                                <div class="form-group">
                                                    {!! Form::hidden('enrolement_id', $enrolement->id, ['class'=>'form-control']) !!}
                                                    {!! Form::select('account_id', $accounts, null, ['class'=>'form-control','placeholder'=>'Select a payment type']) !!}<br>
                                                    {!! Form::number('amount', null, ['class'=>'form-control']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::submit('Add Payment', ['class'=>'btn btn-primary']) !!}
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
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