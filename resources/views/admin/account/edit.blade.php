@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Account Edit Form<a href="{{route('accounts.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::model($account,['method'=>'PATCH','action'=>['AccountController@update', $account], 'files'=>true]) !!}
                    <div class="form-group col-md-4">
                        {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Account Name')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::text('company', null, array('required', 'class'=>'form-control', 'placeholder'=>'Company/Institute Name')) !!}
                    </div>
                    <div class="form-group col-md-4" >
                        {!! Form::text('branch', null, array('required', 'class'=>'form-control', 'placeholder'=>'Branch Name')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        {!! Form::number('balance', null, array('required', 'class'=>'form-control', 'placeholder'=>'Balance')) !!}
                    </div>
                    <div class="col-md-4">
                        {!! form::select('status', ['1'=>'Active', '2'=>'Inactive', '3'=>'Closed'], null,['required','class'=>'form-control', 'placeholder'=>'Select Status']) !!}
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::submit('Update Account', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@endsection