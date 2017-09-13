@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>References List<a href="references/create" class="pull-right create-button"><span class="glyphicon-plus"></span></a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Reference Name</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Image</th>
                        <th>Created By</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($references as $reference)
                        <tr>
                            <td>{{$reference->id}}</td>
                            <td>{{$reference->created_at->format('d-m-Y')}}</td>
                            <td><a href="references/{{$reference->id}}/show">{{$reference->name}}</a></td>
                            <td>{{$reference->designation}}</td>
                            <td>{{$reference->email}}</td>
                            <td>{{$reference->mobile}}</td>
                            <td><img class="img-responsive list-img" src="{{$reference->image}}" alt="" /></td>
                            <td>{{$reference->user->name}}</td>
                            <td><a href="references/{{$reference->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['references.destroy', $reference->id]]) !!}
                                {!! Form::submit('X', ['class'=> 'btn btn-danger btn-small']) !!}
                                {!! Form::close() !!}</a>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection