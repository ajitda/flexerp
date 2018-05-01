@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Transactions List<a href="transactions/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <th>ID</th>
                    <th>Created At</th>
                    <th>Account</th>
                    <th>Transaction Type</th>
                    <th>Amount</th>
                    <th>Created By</th>
                    <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->id}}</td>
                            <td>{{$transaction->created_at->format('d-m-Y')}}</td>
                            <td><a href="{{route('transactions.show', $transaction->id)}}">{{$transaction->account->company}}</a></td>
                            @if($transaction->transaction_type == 1)
                            <td>Payment</td>
                            @elseif($transaction->transaction_type == 2)
                            <td>Received</td>
                            @else
                                <td>Charge</td>
                            @endif
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->user->name}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-list"></i> <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="transactions/{{$transaction->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>

                                        <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                                <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['transactions.destroy', $transaction->id], 'class'=>'form-inline']) !!}
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