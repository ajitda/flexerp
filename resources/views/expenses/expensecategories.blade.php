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
                        <li><a href="#modal-id" data-toggle="modal">Add New Expense Category</a></li>
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

                </div>
            </div>
        </div>
    </div>
@endsection