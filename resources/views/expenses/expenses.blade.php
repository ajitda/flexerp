@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Expenses List<a href="expenses/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
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
                    <form action="{{route('expenses.index')}}" method="get" class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" name="s" placeholder="Keyword" value="{{isset($s) ? $s : ''}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-body" id="expense-list">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>qty</th>
                        <th>description</th>
                        <th>total</th>
                        <th>payment</th>
                        <th>dues</th>
                        <th>Employee</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($expenses as $expense)
                        <tr>
                            <td>{{$expense->id}}</td>
                            <td>{{$expense->created_at->format('d-m-Y')}}</td>
                            <td>{{$expense->qty}}</td>
                            <td>{{$expense->expense_category->name.': '.$expense->description}}</td>
                            <td>{{$expense->total}}</td>
                            <td>{{$expense->payment}}</td>
                            <td>{{$expense->dues}}</td>
                            <td><a href="expenses/{{$expense->id}}/show">{{$expense->employee->name}}</a></td>
                                                        
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-list"></i> <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="expenses/{{$expense->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                                    
                                    <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                        <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['expenses.destroy', $expense->id], 'class'=>'form-inline']) !!}
                                        {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                        {!! Form::close() !!}</a></li>

                                        </ul>
                                    </div></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginations col-md-12 hidden-print">
                    {!! $expenses->appends(['s'=>$s])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#StartDate").datepicker({
                changeDate: true,
                changeMonth: true,
                changeYear: true,
                yearRange: '1970:+0',
                dateFormat: 'yy-mm-dd',
                onSelect: function (dateText) {
                    var DateCreated = $('#StartDate').val();
                    var EndDate = $('#EndDate').val();
                    listSales(DateCreated, EndDate);
                }
            });
            $("#EndDate").datepicker({
                changeDate: true,
                changeMonth: true,
                changeYear: true,
                yearRange: '1970:+0',
                dateFormat: 'yy-mm-dd',
                onSelect: function (dateText) {
                    var DateCreated = $('#StartDate').val();
                    var EndDate = $('#EndDate').val();
                    listSales(DateCreated, EndDate);
                }
            });
            function listSales(criteria1, criteria2) {
                $.ajax({
                    type: 'get',
                    url: "{!! url('/getexpenselist') !!}",
                    data: {DateCreated: criteria1, EndDate: criteria2},
                    success: function (data) {
                        $('#expense-list').empty().html(data);
                    }
                });
            }
        });
    </script>
@endsection