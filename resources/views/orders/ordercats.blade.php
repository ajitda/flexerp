@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Order Categories</h2>
                    </div>

                    <ul class="order-cat list-inline">
                        @foreach($order_cats as $category)
                            <li class="list-group-item list-group-item-info"><a href="{{ route('ordercat.show', $category->id) }}">{{$category->name}}</a></li>
                        @endforeach
                        <li><a href="#modal-id" data-toggle="modal">Add New Order Category</a></li>
                    </ul>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog">
                            {!! Form::open(['route' => 'ordercat.store', 'method' => 'post']) !!}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add A Order Category</h4>
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
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @if(!empty($ordercategory))
                        <div class="panel-body" id="order-list">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Created At</th>
                                    <th>qty</th>
                                    <th>description</th>
                                    <th>total</th>
                                    <th>payment</th>
                                    <th>dues</th>
                                    <th>type</th>
                                    <th>Employee</th>
                                    <th>Customer</th>
                                    <th>Reference</th>
                                    <th colspan="2">Actions</th>
                                </thead>
                                <tbody>
                                    @forelse($ordercategory->order as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->created_at->format('d-m-Y')}}</td>
                                        <td>{{$order->qty}}</td>
                                        <td>{{$order->description}}</td>
                                        <td>{{$order->total}}</td>
                                        <td>{{$order->payment}}</td>
                                        <td>{{$order->dues}}</td>
                                        <td>{{$order->type}}</td>
                                        <td><a href="orders/{{$order->id}}/show">{{$order->employee->name}}</a></td>
                                        <td><a href="orders/{{$order->id}}/show">
                                                @if(isset($order->customer_id))
                                                {{$order->customer->name}}
                                                @endif
                                            </a></td>
                                        <td><a href="orders/{{$order->id}}/show">
                                                @if(isset($order->reference_id))
                                                {{$order->reference->name}}</a>
                                            @endif
                                        </td>
                                        <td><a href="{{route('orders.edit', $order->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                        <td><a href="#" onclick="return confirm('are you sure?')">
                                            {!! Form::open(['method'=> 'DELETE', 'route'=>['orders.destroy', $order->id]]) !!}
                                            {!! Form::submit('X', ['class'=> 'btn btn-danger btn-small']) !!}
                                            {!! Form::close() !!}</a>
                                    </tr>
                                
                                    @empty
                                    <tr><td colspan="12" rowspan="" headers="">No Data</td> </tr>
                                    @endforelse
                                    @if(count($ordercategory->order) != 0)
                                    <tr>
                                        <td colspan="2">Total</td>
                                        <td>{{DB::table('orders')->where('order_cat_id', $ordercategory->id)->sum('qty')}}</td>
                                        <td></td>
                                        <td>{{DB::table('orders')->where('order_cat_id', $ordercategory->id)->sum('total')}}</td>
                                        <td>{{DB::table('orders')->where('order_cat_id', $ordercategory->id)->sum('payment')}}</td>
                                        <td>{{DB::table('orders')->where('order_cat_id', $ordercategory->id)->sum('dues')}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"></td>
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