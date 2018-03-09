@extends('layouts.app')
@section('content')
    {!! Html::script('js/angular.min.js', array('type' => 'text/javascript')) !!}
    {!! Html::script('js/main.js', array('type' => 'text/javascript')) !!}
    <div class="container" ng-app="automateApp">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Make Expense<a href="{{route('expenses.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
            <div class="panel-body" ng-controller="automateController">
                <div class="row">
                    {!! Form::model($expense,['method'=>'PATCH', 'action'=>['ExpenseController@update', $expense], 'files'=>true]) !!}
                    <div class="form-group col-md-3">
                        <label for="expense_category">Select a Category</label>
                        {!! Form::select('expense_category_id', $expense_categories, null, ['required', 'id'=>'expense_category', 'class'=>'form-control', 'placeholder'=>'Select a Category']) !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="employee">Select Employee</label>
                        {!! Form::select('employee_id', $employees, null, ['required', 'id'=>'employee',  'class'=>'form-control', 'placeholder'=>'Select Employee']) !!}
                    </div>
                    @if($expense->expense_category_id == "6")
                    <div class="form-group col-md-3">
                        <label for="loan_ids">Select Lender</label>
                        {!! Form::select('loan_id', $loans, null, ['required', 'id'=>'loan_ids',  'class'=>'form-control', 'placeholder'=>'Select Lender']) !!}
                    </div>
                    @endif
                    <div class="clearfix"></div>
                    <div class="form-group col-md-3">
                        <label for="qty">Enter Quantity</label>
                        {!! Form::number('qty', null, array('required', 'id'=>'qty', 'class'=>'form-control', 'placeholder'=>'', 'ng-model'=>'qty', 'ng-init'=>"qty='$expense->qty'")) !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="price">Unit Price/Amount</label>
                        {!! Form::number('unit_price', null, array('required', 'id'=>'price', 'class'=>'form-control', 'value'=>'', 'ng-model'=>'unit_price', 'ng-init'=>"unit_price='$expense->unit_price'")) !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="total">Total : </label>
                        <div class="total">
                            <span data-ng-bind=" qty * unit_price | currency"></span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-3" >
                        <label for="payment">Payment</label>
                        {!! Form::number('payment', null, array('required', 'id'=>'payment', 'class'=>'form-control', 'placeholder'=>'', 'ng-model'=>'payment', 'ng-init'=>"payment='$expense->payment'")) !!}
                    </div>
                    <div class="form-group col-md-2">
                        <label for="payment_type">Payment Type : </label>
                        {!! Form::select('payment_type', array('bank'=>'Bank', 'bkash'=>'Bkash', 'cash'=>'Cash', 'online'=> 'Online', 'pending'=>'Pending'), null, array('required', 'class'=> 'form-control', 'id'=> 'payment_type', 'placeholder'=>'Payment Type')) !!}
                    </div>
                    <div class="form-group col-md-2">
                        <label for="total">Dues : </label>
                        <div class="total">
                            <span data-ng-bind=" qty * unit_price - payment | currency"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="comment">Make a comment</label>
                        {!! Form::text('description', null, array('required', 'id'=>'comment', 'class'=>'form-control', 'placeholder'=>'Write a comment')) !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-3">
                        {!! Form::submit('Update Expense', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection

