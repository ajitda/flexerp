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
                            <table class="table table-striped table-hover">
                                
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
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($expensecategory->expense as $expense)
                                    <tr>
                                       <td>{{$expense->id}}</td>
                                        <td>{{$expense->created_at->format('d-m-Y')}}</td>
                                        <td>{{$expense->qty}}</td>
                                        <td>{{$expense->description}}</td>
                                        <td>{{$expense->total}}</td>
                                        <td>{{$expense->payment}}</td>
                                        <td>{{$expense->dues}}</td>
                                        <td><a href="expenses/{{$expense->id}}/show">{{$expense->employee->name}}</a></td>
                                        
                                        <td><div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                <i class="fa fa-list"></i> <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{route('expenses.edit', $expense->id)}}"><i class="fa fa-pencil"></i> Edit</a></li>
                                                
                                                <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                                    <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['expenses.destroy', $expense->id], 'class'=>'form-inline']) !!}
                                                    {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                                    {!! Form::close() !!}</a></li>

                                                    </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr><td colspan="9" rowspan="" headers="">No Data</td> </tr>
                                    @endforelse
                                    @if(!empty($expensecategory))
                                    <tr>
                                        <td colspan="2">Total</td>
                                        <td>{{DB::table('expenses')->where('expense_category_id', $expensecategory->id)->sum('qty')}}</td>
                                        <td></td>
                                        <td>{{DB::table('expenses')->where('expense_category_id', $expensecategory->id)->sum('total')}}</td>
                                        <td>{{DB::table('expenses')->where('expense_category_id', $expensecategory->id)->sum('payment')}}</td>
                                        <td>{{DB::table('expenses')->where('expense_category_id', $expensecategory->id)->sum('dues')}}</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>    
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
@endsection