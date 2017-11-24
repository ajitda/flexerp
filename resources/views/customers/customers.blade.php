@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Customers List<a href="customers/create" class="pull-right create-button"><span class="glyphicon glyphicon-plus"></span></a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Customer Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Image</th>
                        <th>Created By</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->created_at->format('d-m-Y')}}</td>
                            <td><a href="customers/{{$customer->id}}/show">{{$customer->name}}</a></td>
                            <td>{{$customer->company}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->mobile}}</td>
                            <td><img class="img-responsive list-img" src="{{$customer->image}}" alt="" /></td>
                            <td>{{$customer->user->name}}</td>
                            <td><a href="customers/{{$customer->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="#" onclick="return confirm('are you sure?')">
                                {!! Form::open(['method'=> 'DELETE', 'route'=>['customers.destroy', $customer->id]]) !!}
                                {!! Form::submit('X', ['class'=> 'btn btn-danger btn-small']) !!}
                                {!! Form::close() !!}</a></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection