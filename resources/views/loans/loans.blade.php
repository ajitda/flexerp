@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Loans List<a href="loans/create" class="pull-right create-button"><span class="glyphicon-plus"></span></a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Lender Name</th>
                        <th>Amount</th>
                        <th>Interest Rate</th>
                        <th>installment Qty</th>
                        <th>installment</th>
                        <th>Total Amount</th>
                        <th>Payment Date</th>
                        <th>User</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($loans as $loan)
                        <tr>
                            <td>{{$loan->id}}</td>
                            <td>{{$loan->created_at->format('d-m-Y')}}</td>
                            <td>{{$loan->name}}</td>
                            <td>{{$loan->amount}}</td>
                            <td>{{$loan->interest}}</td>
                            <td>{{$loan->installment_qty}}</td>
                            <td>{{$loan->installment}}</td>
                            <td>{{$loan->total_amount}}</td>
                            <td>{{$loan->payment_date}}</td>
                            <td><a href="loans/{{$loan->id}}/show">{{$loan->user->name}}</a></td>
                            <td><a href="loans/{{$loan->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['loans.destroy', $loan->id]]) !!}
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