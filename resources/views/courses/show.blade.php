@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Course Details <a href="{{route('courses.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
            <div class="panel-body">
                <img src="{{asset($course->image)}}" alt="" class="img-responsive">
                <h2>{{$course->name}}</h2>
                <div class="row">
                    <div class="col-sm-3 text-right">
                        <h4>Course Duration : </h4>
                        <h4>Total Sessions : </h4>
                        <h4>Course Code : </h4>
                        <h4>Course Fee : </h4>
                        <h4>Course Topics : </h4>
                        <h4>Course Description : </h4>
                    </div>
                    <div class="col-sm-9">
                        <h4><b> {{$course->duration}} Months</b></h4>
                        <h4><b>{{$course->sessions}} Sessions</b></h4>
                        <h4>{{$course->code}} </h4>
                        <h4>Tk. {{$course->fees}} </h4>
                        <h4>{{$course->topics}} </h4>
                        {!!$course->description!!}
                        
                    </div>
                </div>
                
                
                
            </div>
        </div>

    </div>

    @endsection