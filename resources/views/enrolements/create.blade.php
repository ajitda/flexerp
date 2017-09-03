@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Course Enrolement Form</h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::open(['route'=>'enrolements.store', 'files'=>true]) !!}
                        <div class="form-group col-md-4">
                            {!! Form::select('student_id', $students, array('required', 'class'=>'form-control', 'placeholder'=>'Select Student Name')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::select('course_id', $courses, array('required', 'class'=>'form-control', 'placeholder'=>'Select Course Name')) !!}
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
                            {!! Form::submit('Make Enrolement', array('class'=>'btn btn-primary')) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

    @endsection