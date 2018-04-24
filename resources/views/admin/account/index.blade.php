@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Accounts List<a href="accounts/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <th>ID</th>
                    <th>Created At</th>
                    <th>Account Name</th>
                    <th>Company</th>
                    <th>Branch</th>
                    <th>Balance</th>
                    <th>Created By</th>
                    <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                    @foreach($accounts as $account)
                        <tr>
                            <td>{{$account->id}}</td>
                            <td>{{$account->created_at->format('d-m-Y')}}</td>
                            <td><a href="{{route('accounts.show', $account->id)}}">{{$account->name}}</a></td>
                            <td>{{$account->company}}</td>
                            <td>{{$account->branch}}</td>
                            <td>{{$account->balance}}</td>
                            <td>{{$account->user_id}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-list"></i> <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="accounts/{{$account->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>

                                        <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                                <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['accounts.destroy', $account->id], 'class'=>'form-inline']) !!}
                                                {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                                {!! Form::close() !!}</a></li>

                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection