@extends('layouts.app')
@section('content')
    {!! Html::script('js/angular.min.js', array('type' => 'text/javascript')) !!}
    {!! Html::script('js/main.js', array('type' => 'text/javascript')) !!}
    <div class="container" ng-app="automateApp">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Edit Course Enrolement Form<a href="{{route('enrolements.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
            <div class="panel-body" ng-controller="automateController">
                <div class="row">
                    {!! Form::model($enrolement, ['method'=>'PATCH', 'action'=>['EnrolementController@update', $enrolement], 'files'=>true]) !!}
                    <div class="form-group col-md-4">
                        <label for="student">Select Student Name</label>
                        {!! Form::select('student_id', $students, null, ['required', 'id'=>'student', 'class'=>'form-control', 'placeholder'=>'Select Student Name']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="course">Select Course Name</label>
                        {!! Form::select('course_id', $courses, null, ['required', 'id'=>'course', 'class'=>'form-control', 'placeholder'=>'Select Course Name']) !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-4">
                        <label for="qty">Enter Quantity</label>
                        {!! Form::number('qty', null, array('required', 'id'=>'qty', 'class'=>'form-control', 'placeholder'=>'', 'ng-model'=>'qty', 'ng-init'=>"qty='$enrolement->qty'")) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="price">Course Fee</label>
                        {!! Form::number('price', null, array('required', 'id'=>'price', 'class'=>'form-control', 'value'=>'', 'ng-model'=>'course_fee', 'ng-init'=>"course_fee='$enrolement->price'")) !!}
                    </div>
                    <div class="form-group col-md-2" >
                        <label for="discount">Discount</label>
                        {!! Form::number('discount', null, array('required', 'id'=>'discount', 'class'=>'form-control', 'placeholder'=>'', 'ng-model'=>'discount', 'ng-init'=>"discount='$enrolement->discount'")) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="total">Total : </label>
                        <div class="total">
                            <span data-ng-bind=" qty * course_fee - discount | currency"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4" >
                        <label for="payment">Payment</label>
                        {!! Form::number('payment', null, array('required', 'id'=>'payment', 'class'=>'form-control', 'placeholder'=>'', 'ng-model'=>'payment', 'ng-init'=>"payment='$enrolement->payment'")) !!}
                    </div>
                    <div class="form-group col-md-2">
                        <label for="payment_type">Payment Type : </label>
                        {!! Form::select('payment_type', $types, null, array('required', 'class'=> 'form-control', 'id'=> 'payment_type', 'placeholder'=>'Payment Type')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dues">Dues : </label>
                        <div class="dues">
                            <span data-ng-bind=" qty * course_fee - discount - payment| currency"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="comment">Make a comment</label>
                        {!! Form::text('comment', null, array('required', 'id'=>'comment', 'class'=>'form-control', 'placeholder'=>'Write a comment')) !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-3">
                        {!! Form::submit('Update Enrolement', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        $("#course").change( function(event) {


            $.get("/enrolements/create/getcourse/"+event.target.value+"", function (response, course) {
                console.log(response);
            });
        });
    </script>
@endsection