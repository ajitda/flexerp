@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Transaction Registration Form<a href="{{route('transactions.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::open(['route'=>'transactions.store']) !!}
                    <div class="form-group col-md-4">
                        {!! Form::select('transaction_type', ['1'=>'Payment','2'=>'Receipt', '3'=>'Charge'], null, array('required', 'class'=>'form-control', 'placeholder'=>'Transaction Name')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::select('account_id', $accounts, null,  array('required', 'class'=>'form-control','placeholder'=>'Select an Account')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::number('amount', null, array('required', 'class'=>'form-control', 'placeholder'=>'Balance')) !!}
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::submit('Add Transaction', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@endsection