@extends('layouts.app')
@section('content')
    {!! Html::script('js/angular.min.js', array('type' => 'text/javascript')) !!}
    {!! Html::script('js/main.js', array('type' => 'text/javascript')) !!}
    <div class="container" ng-app="automateApp">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Edit Loan</h1>
            </div>
            <div class="panel-body" ng-controller="automateController">
                <div class="row">
                    {!! Form::model($loan, ['method'=>'PATCH','action'=>['LoanController@update', $loan],]) !!}
                    <div class="form-group col-md-3">
                        <label for="name">Enter Lender Name</label>
                        {!! Form::text('name', null, array('required', 'id'=>'amount', 'class'=>'form-control', 'placeholder'=>'Enter Lender Name')) !!}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="amount">Lend Amount</label>
                        {!! Form::number('amount', null, array('required', 'id'=>'amount', 'class'=>'form-control', 'ng-model'=>'amount')) !!}
                    </div>
                    <div class="form-group col-md-3" >
                        <label for="interest">Interest Rate</label>
                        {!! Form::number('interest', null, array('required', 'id'=>'interest', 'class'=>'form-control', 'placeholder'=>'Interest Rate', 'ng-model'=>'interest')) !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-2" >
                        <label for="installment_qty">Installment Qty</label>
                        {!! Form::number('installment_qty', null, array('required', 'id'=>'installment_qty', 'class'=>'form-control', 'placeholder'=>'Installment Qty', 'ng-model'=>'installment_qty')) !!}
                    </div>
                    <div class="form-group col-md-2">
                        <label for="installment">Installment : </label>
                        <div class="installment">
                            <span data-ng-bind=" (amount + (amount * interest)/100) / installment_qty | currency"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="total_amount">Total Amount : </label>
                        <div class="total_amount">
                            <span data-ng-bind=" (amount + (amount * interest)/100) | currency"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="payment_date">Select a Payment Date</label>
                        {!! Form::date('payment_date', null, array('required', 'id'=>'payment_date', 'class'=>'form-control', 'placeholder'=>'mm/dd/yyyy')) !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-3">
                        {!! Form::submit('Make Expense', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection

{{--
@section('scripts')
    <script>
        $("#course").change( function(event) {


            $.get("/expenses/create/getcourse/"+event.target.value+"", function (response, course) {
                console.log(response);
            });
        });
    </script>
@endsection--}}
