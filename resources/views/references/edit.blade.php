@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Edit Employee Registration Form</h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::model($employee, ['method'=>'PATCH', 'action'=>['EmployeeController@update', $employee], 'files'=>true]) !!}
                    <div class="form-group col-md-4">
                        {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Employee Name')) !!}
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
                    <div class="form-group col-md-8">
                        {!! Form::textarea('address', null, array('required', 'class'=>'form-control address', 'placeholder'=>'Address')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <img class="img-responsive edit-img" src="../../{{$employee->image}}" alt="" />
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-3">
                        {!! Form::number('mobile', null, array('required', 'class'=>'form-control', 'placeholder'=>'Mobile No')) !!}
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::file('image', null, array('required', 'class'=>'form-control', 'placeholder'=>'Select an Image')) !!}
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::submit('Update Employee', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection