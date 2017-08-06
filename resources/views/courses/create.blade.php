@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Course Registration Form</h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::open(['route'=>'courses.store', 'files'=>true]) !!}
                        <div class="form-group col-md-4">
                            {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Course Name')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::number('duration', null, array('required', 'class'=>'form-control', 'placeholder'=>'Course Duration')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::text('code', null, array('required', 'class'=>'form-control', 'placeholder'=>'Course Code')) !!}
                        </div>
                        <div class="form-group col-md-12" >
                            {!! Form::text('topics', null, array('required', 'class'=>'form-control', 'placeholder'=>'Topics Covered')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::number('sessions', null, array('required', 'class'=>'form-control', 'placeholder'=>'Total Sessions')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::number('fees', null, array('required', 'class'=>'form-control', 'placeholder'=>'Course Fee')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::file('image', null, array('required', 'class'=>'form-control', 'placeholder'=>'Select an Image')) !!}
                        </div>

                        <div class="form-group col-md-12">
                            {!! Form::textarea('description', null, array('required', 'class'=>'form-control address', 'placeholder'=>'Course Description')) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::submit('Add Course', array('class'=>'btn btn-primary')) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

    @endsection