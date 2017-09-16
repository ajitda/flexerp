@extends('layouts.app')
@section('content')
    {!! Html::script('js/angular.min.js', array('type' => 'text/javascript')) !!}
    {!! Html::script('js/main.js', array('type' => 'text/javascript')) !!}
    <div class="container" ng-app="automateApp">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Make Order/Payment</h1>
            </div>
            <div class="panel-body" ng-controller="automateController">
                <div class="row">
                    {!! Form::open(['route'=>'orders.store', 'files'=>true]) !!}
                        <div class="form-group col-md-3">
                            <label for="oder_category">Select a Category</label>
                            {!! Form::select('order_cat_id', $order_cats, null, ['required', 'id'=>'oder_category', 'class'=>'form-control', 'placeholder'=>'Select a Category']) !!}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="employee">Select Employee</label>
                            {!! Form::select('employee_id', $employees, null, ['required', 'id'=>'employee',  'class'=>'form-control', 'placeholder'=>'Select Employee']) !!}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="customer">Select Customer</label>
                            {!! Form::select('customer_id', $customers, null, [ 'id'=>'customer',  'class'=>'form-control', 'placeholder'=>'Select Customer']) !!}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="reference">Select Reference(if any)</label>
                            {!! Form::select('reference_id', $references, null, [ 'id'=>'reference',  'class'=>'form-control', 'placeholder'=>'Select Reference']) !!}
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-3">
                            <label for="qty">Enter Quantity</label>
                            {!! Form::number('qty', null, array('required', 'id'=>'qty', 'class'=>'form-control', 'placeholder'=>'', 'ng-model'=>'qty')) !!}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="price">Unit Price/Amount</label>
                            {!! Form::number('unit_price', null, array('required', 'id'=>'price', 'class'=>'form-control', 'value'=>'', 'ng-model'=>'unit_price')) !!}
                        </div>
                        <div class="form-group col-md-3" >
                            <label for="discount">Discount</label>
                            {!! Form::number('discount', null, array('required', 'id'=>'discount', 'class'=>'form-control', 'placeholder'=>'', 'ng-model'=>'discount')) !!}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="total">Total : </label>
                            <div class="total">
                                <span data-ng-bind=" qty * unit_price - discount | currency"></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-3" >
                            <label for="payment">Payment</label>
                            {!! Form::number('payment', null, array('required', 'id'=>'payment', 'class'=>'form-control', 'placeholder'=>'', 'ng-model'=>'payment')) !!}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="total">Dues : </label>
                            <div class="total">
                                <span data-ng-bind=" qty * unit_price - discount - payment | currency"></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="type">Payment Type : </label>
                            {!! Form::select('type', array('bank'=>'Bank', 'cash'=>'Cash', 'online'=> 'Online', 'pending'=>'Pending'), null, array('required', 'class'=> 'form-control', 'id'=> 'type', 'placeholder'=>'Payment Type')) !!}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="comment">Make a comment</label>
                            {!! Form::text('description', null, array('required', 'id'=>'comment', 'class'=>'form-control', 'placeholder'=>'Write a comment')) !!}
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-3">
                            {!! Form::submit('Make Order/Payment', array('class'=>'btn btn-primary')) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        @section('scripts')
            <script>
                $("#course").change( function(event) {


                    $.get("/orders/create/getcourse/"+event.target.value+"", function (response, course) {
                        console.log(response);
                    });
                });
            </script>
        @endsection

    </div>

    @endsection

