@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Orders List<a href="orders/create" class="pull-right create-button"><span class="glyphicon-plus"></span></a></h1>
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
                        <th>type</th>
                        <th>Employee</th>
                        <th>Customer</th>
                        <th>Reference</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->created_at->format('d-m-Y')}}</td>
                            <td>{{$order->qty}}</td>
                            <td>{{$order->description}}</td>
                            <td>{{$order->total}}</td>
                            <td>{{$order->payment}}</td>
                            <td>{{$order->dues}}</td>
                            <td>{{$order->type}}</td>
                            <td><a href="orders/{{$order->id}}/show">{{$order->employee->name}}</a></td>
                            <td><a href="orders/{{$order->id}}/show">{{$order->customer->name}}</a></td>
                            <td><a href="orders/{{$order->id}}/show">{{$order->reference->name}}</a></td>
                            <td><a href="orders/{{$order->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['orders.destroy', $order->id]]) !!}
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