@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Expenses List<a href="expenses/create" class="pull-right create-button"><span class="glyphicon-plus"></span></a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>qty</th>
                        <th>description</th>
                        <th>total</th>
                        <th>payment</th>
                        <th>dues</th>
                        <th>Employee</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($expenses as $expense)
                        <tr>
                            <td>{{$expense->id}}</td>
                            <td>{{$expense->created_at->format('d-m-Y')}}</td>
                            <td>{{$expense->qty}}</td>
                            <td>{{$expense->description}}</td>
                            <td>{{$expense->total}}</td>
                            <td>{{$expense->payment}}</td>
                            <td>{{$expense->dues}}</td>
                            <td><a href="expenses/{{$expense->id}}/show">{{$expense->employee->name}}</a></td>
                            <td><a href="expenses/{{$expense->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['expenses.destroy', $expense->id]]) !!}
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