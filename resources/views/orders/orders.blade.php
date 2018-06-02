@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Orders/Payments List<a href="orders/create" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Create</a></h1>
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
                    <form action="{{route('orders.index')}}" method="get" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="s" class="form-control" placeholder="keyword" value="{{isset($s) ? $s : ''}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel-body" id="order-list">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Created At</th>
                        <th>qty</th>
                        <th>description</th>
                        <th>total</th>
                        <th>payment</th>
                        <th>dues</th>
                        <th>Employee</th>
                        <th>Customer</th>
                        <th width="100">Reference</th>
                        <th colspan="2">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->created_at->format('d-m-Y')}}</td>
                            <td>{{$order->qty}}</td>
                            <td>{{$order->description}}</td>
                            <td>{{$order->total}}</td>
                            <td>{{$order->payment}}</td>
                            <td>{{$order->dues}}</td>
                            <td><a href="orders/{{$order->id}}/show">{{$order->employee->name}}</a></td>
                            <td><a href="orders/{{$order->id}}/show">
                                    @if(isset($order->customer_id))
                                    {{$order->customer->name}}
                                    @endif
                                </a></td>
                            <td width="100"><a href="orders/{{$order->id}}/show">
                                    @if(isset($order->reference_id))
                                    {{$order->reference->name}}
                                @endif</a>
                            </td>
                            
                            <td>
                                <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-list"></i> <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="orders/{{$order->id}}/edit"><i class="fa fa-pencil"></i> Edit</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#myModal{{$order->id}}"><i class="fa fa-dollar"></i> Payment</a></li>

                                    <li><a href="#" class="delete-form" onclick="return confirm('are you sure?')">
                                        <i class="fa fa-trash-o"></i> {!! Form::open(['method'=> 'DELETE', 'route'=>['orders.destroy', $order->id], 'class'=>'form-inline']) !!}
                                        {!! Form::submit('Delete', ['class'=> 'delete-btn']) !!}
                                        {!! Form::close() !!}</a></li>

                                        </ul>
                                        <div class="modal fade" id="myModal{{$order->id}}" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Add Payment</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        {!! Form::open(['route'=>'orderpayment.store']) !!}
                                                        <div class="form-group">
                                                            {!! Form::select('account_id', $accounts, null, array('class' => 'form-control','placeholder'=>'Select a payment type','required')) !!}
                                                        </div>
                                                        <div class="form-group">
                                                            {!! Form::hidden('order_id', $order->id, ['class'=>'form-control']) !!}
                                                            {!! Form::number('amount', null, ['class'=>'form-control','placeholder'=>'amount']) !!}
                                                        </div>
                                                        <div class="form-group">
                                                            {!! Form::text('comments', null, ['class'=>'form-control','placeholder'=>'comments']) !!}
                                                        </div>
                                                        <div class="form-group">
                                                            {!! Form::submit('Add Payment', ['class'=>'btn btn-primary']) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>                  
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginations col-md-12 hidden-print">
                    {{$orders->appends(['s'=>$s])->render()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $("#StartDate").datepicker({
            changeDate:true,
            changeMonth:true,
            changeYear:true,
            yearRange:'1970:+0',
            dateFormat:'yy-mm-dd',
            onSelect:function(dateText){
                var DateCreated = $('#StartDate').val();
                var EndDate = $('#EndDate').val();
                listSales(DateCreated,EndDate);
            }
        });
        $("#EndDate").datepicker({
            changeDate:true,
            changeMonth:true,
            changeYear:true,
            yearRange:'1970:+0',
            dateFormat:'yy-mm-dd',
            onSelect:function(dateText){
                var DateCreated = $('#StartDate').val();
                var EndDate = $('#EndDate').val();
                listSales(DateCreated, EndDate);
            }
        });
        function listSales(criteria1, criteria2)
        {
            $.ajax({
                type : 'get',
                url : "{!! url('/getorderlist') !!}",
                data : {DateCreated:criteria1,EndDate:criteria2},
                success:function(data)
                {
                    $('#order-list').empty().html(data);
                }
            })
        }
    </script>
@endsection