@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Orders/Payments List<a href="orders/create" class="pull-right create-button"><span class="glyphicon-plus"></span></a></h1>
            </div>
            <div class="col-md-4">
                <div class="form-group form-inline">
                    <label for="StartDate">From</label>
                    <input type="text" name="StartDate" id="StartDate" class="form-control" required />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group form-inline">
                    <label for="EndDate">To</label>
                    <input type="text" name="EndDate" id="EndDate" class="form-control" required />
                </div>
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
                            <td><a href="orders/{{$order->id}}/show">
                                    @if(isset($order->customer_id))
                                    {{$order->customer->name}}
                                    @endif
                                </a></td>
                            <td><a href="orders/{{$order->id}}/show">
                                    @if(isset($order->reference_id))
                                    {{$order->reference->name}}</a>
                                @endif
                            </td>
                            <td><a href="orders/{{$order->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['orders.destroy', $order->id]]) !!}
                                {!! Form::submit('X', ['class'=> 'btn btn-danger btn-small']) !!}
                                {!! Form::close() !!}</a>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginations col-md-12 hidden-print">
                    {{$orders->render()}}
                </div>
            </div>
        </div>
    </div>
@endsection