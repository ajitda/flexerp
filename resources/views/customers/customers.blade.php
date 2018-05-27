@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Customers List<a href="customers/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
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
                    <form action="{{route('customers.index')}}" method="get" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="s" class="form-control" placeholder="keyword" value="{{isset($s) ? $s : ''}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel-body" id="customer-list">
                <table class="table table-striped table-hover">
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
                            <td><div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-list"></i> <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="customers/{{$customer->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                                    
                                    <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                        <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['customers.destroy', $customer->id], 'class'=>'form-inline']) !!}
                                        {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                        {!! Form::close() !!}</a></li>

                                        </ul>
                                    </div></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginations col-md-12 hidden-print">
                    {{$customers->appends(['s'=>$s])->render()}}
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
                url: "{!! url('/getcustomerlist') !!}",
                data: {DateCreated: criteria1, EndDate: criteria2},
                success: function (data) {
                    $('#customer-list').empty().html(data);
                }
            });
        }
    });
</script>
@endsection