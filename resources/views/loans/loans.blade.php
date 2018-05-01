@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Loans List<a href="loans/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Lender Name</th>
                        <th>Amount</th>
                        <th>Interest</th>
                        <th>inst. Qty</th>
                        <th>installment</th>
                        <th>Total</th>
                        <th>Payment</th>
                        <th>Payment Date</th>
                        <th>User</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($loans as $loan)
                            @if($loan->total_amount >0)
                        <tr>
                            <td>{{$loan->id}}</td>
                            <td>{{$loan->created_at->format('d-m-Y')}}</td>
                            <td>{{$loan->name}}</td>
                            <td>{{$loan->amount}}</td>
                            <td>{{$loan->interest}}</td>
                            <td>{{$loan->installment_qty}}</td>
                            <td>{{$loan->installment}}</td>
                            <td>{{$loan->total_amount}}</td>
                            <td>{{$loan->payment}}</td>
                            <td>{{$loan->payment_date}}</td>
                            <td><a href="loans/{{$loan->id}}/show">{{$loan->user->name}}</a></td>
                            <td>
                                <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-list"></i> <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="loans/{{$loan->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                                    
                                    <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                        <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['loans.destroy', $loan->id], 'class'=>'form-inline']) !!}
                                        {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                        {!! Form::close() !!}</a></li>

                                        </ul>
                                    </div>
                                </td>
                    </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection