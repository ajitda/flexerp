@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Customer Registration Form<a href="{{route('customers.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>List</a></h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::open(['route'=>'customers.store', 'files'=>true]) !!}
                        <div class="form-group col-md-4">
                            {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Customer Name')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::text('designation', null, array('required', 'class'=>'form-control', 'placeholder'=>'Designation')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::text('company', null, array( 'class'=>'form-control', 'placeholder'=>'Company Name')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::email('email', null, array( 'class'=>'form-control', 'placeholder'=>'Write Email')) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::number('mobile', null, array( 'class'=>'form-control', 'placeholder'=>'Mobile No')) !!}
                        </div>
                        <div class="form-group col-md-3">
                            {!! Form::file('image', null, array( 'class'=>'form-control', 'placeholder'=>'Select an Image')) !!}
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::textarea('address', null, array( 'class'=>'form-control address', 'placeholder'=>'Address')) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::submit('Add Customer', array('class'=>'btn btn-primary')) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

    @endsection