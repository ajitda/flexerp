@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>References List<a href="references/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
            </div>
            <div class="date-filter">
                <div class="col-md-4">
                    <div class="form-group form-inline">
                        <label for="StartDate">From</label>
                        <input type="text" name="StartDate" id="StartDate" class="form-control" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-inline">
                        <label for="EndDate">To</label>
                        <input type="text" name="EndDate" id="EndDate" class="form-control" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="{{route('references.index')}}" method="get" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="s" class="form-control" placeholder="keyword" value="{{isset($s) ? $s : ''}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Reference Name</th>
                        <th>Father's Name</th>
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
                            <td>{{$reference->fathers_name}}</td>
                            <td>{{$reference->email}}</td>
                            <td>{{$reference->mobile}}</td>
                            <td><img class="img-responsive list-img" src="{{$reference->image}}" alt="" /></td>
                            <td>{{$reference->user->name}}</td>
                            <td><div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-list"></i> <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="references/{{$reference->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                        <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['references.destroy', $reference->id], 'class'=>'form-inline']) !!}
                                        {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                        {!! Form::close() !!}</a></li>
                                </ul>
                                    </div>
                                </td>
                    </tr>
                        @endforeach
                    </tbody>
                    <div class="paginations col-md-12 hidden-print">
                        {{$references->appends(['s'=>$s])->render()}}
                    </div>
                </table>
            </div>
        </div>
    </div>
@endsection