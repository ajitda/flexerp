@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Expense Categories</h2>
                    </div>
                    <ul class="expense-cat list-inline">
                        @foreach($expense_cats as $category)
                            <li class="list-group-item list-group-item-info"><a href="{{ route('expensecategories.show', $category->id) }}">{{$category->name}}</a></li>
                        @endforeach
                        <li><a href="#modal-id" data-toggle="modal">Add New</a></li>
                    </ul>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog">
                            {!! Form::open(['route' => 'expensecategories.store', 'method' => 'post']) !!}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add A Expense Category</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                   
                        @if(!empty($expensecategory))
                         <div class="panel-body category_wise_expenses">
                            <table class="table table-bordered table-striped table-hover">
                                
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Created At</th>
                                        <th>qty</th>
                                        <th>description</th>
                                        <th>total</th>
                                        <th>payment</th>
                                        <th>dues</th>
                                        <th>Employee</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($expensecategory as $expense)
                                    <tr>
                                       <td>{{$expense->id}}</td>
                                        <td>{{$expense->created_at->format('d-m-Y')}}</td>
                                        <td>{{$expense->qty}}</td>
                                        <td>{{$expense->description}}</td>
                                        <td>{{$expense->total}}</td>
                                        <td>{{$expense->payment}}</td>
                                        <td>{{$expense->dues}}</td>
                                        <td><a href="expenses/{{$expense->id}}/show">{{$expense->employee->name}}</a></td>
                                        <td><a href="expenses/{{$expense->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                                        <td><a href="#" onclick="return confirm('are you sure?')">
                                                {!! Form::open(['method'=> 'DELETE', 'route'=>['expenses.destroy', $expense->id]]) !!}
                                                {!! Form::submit('X', ['class'=> 'btn btn-danger btn-small']) !!}
                                                {!! Form::close() !!}</a></td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="9" rowspan="" headers="">No Data</td> </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>    
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
@endsection