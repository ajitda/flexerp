@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Edit Reference Registration Form<a href="{{route('references.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    {!! Form::model($reference, ['method'=>'PATCH', 'action'=>['ReferenceController@update', $reference], 'files'=>true]) !!}
                    <div class="form-group col-md-4">
                        {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Reference Name')) !!}
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
                    <div class="form-group col-md-3">
                        {!! Form::number('mobile', null, array('required', 'class'=>'form-control', 'placeholder'=>'Mobile No')) !!}
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::file('image', null, array('required', 'class'=>'form-control', 'placeholder'=>'Select an Image')) !!}
                    </div>
                    <div class="form-group col-md-8">
                        {!! Form::textarea('address', null, array('required', 'class'=>'form-control address', 'placeholder'=>'Address')) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <img class="img-responsive edit-img" src="../../{{$reference->image}}" alt="" />
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group col-md-3">
                        {!! Form::submit('Update Reference', array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection