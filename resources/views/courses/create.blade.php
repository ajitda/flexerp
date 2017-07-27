@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Student Registration Form</h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::open(['route'=>'students.store', 'files'=>true]) !!}
                        <div class="form-group col-md-4">
                            {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Student Name')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::text('fathers_name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Father\'s Name')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::text('mothers_name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Mother\'s Name')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::email('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'Write Email')) !!}
                        </div>
                        <div class="form-group col-md-4" >
                            {!! Form::date('date_of_birth', null, array('required', 'class'=>'form-control', 'placeholder'=>'yyyy-mm-dd')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::text('occupation', null, array('required', 'class'=>'form-control', 'placeholder'=>'Occupation')) !!}
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::textarea('address', null, array('required', 'class'=>'form-control address', 'placeholder'=>'Address')) !!}
                        </div>
                        <div class="form-group col-md-3">
                            {!! Form::number('mobile', null, array('required', 'class'=>'form-control', 'placeholder'=>'Mobile No')) !!}
                        </div>
                        <div class="form-group col-md-3">
                            {!! Form::file('image', null, array('required', 'class'=>'form-control', 'placeholder'=>'Select an Image')) !!}
                        </div>
                        <div class="form-group col-md-3">
                            {!! Form::submit('Add Student', array('class'=>'btn btn-primary')) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

    @endsection