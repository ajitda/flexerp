<table class="table table-striped table-hover">
    <thead>
    <th>ID</th>
    <th>Created At</th>
    <th>qty</th>
    <th>description</th>
    <th>total</th>
    <th>payment</th>
    <th>dues</th>
    <th>type</th>
    <th>Customer</th>
    <th>Reference</th>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->created_at->format('d-m-Y')}}</td>
            <td>{{$order->qty}}</td>
            <td>{{$order->Order_cat->name.': '.$order->description}}</td>
            <td>{{$order->total}}</td>
            <td>{{$order->payment}}</td>
            <td>{{$order->dues}}</td>
            <td>{{$order->type}}</td>
        </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>{{DB::table('orders')->whereBetween('created_at', [ $request->DateCreated.' 00:00:00', $request->EndDate.' 23:59:59'])->sum('total')}}</td>
        <td>{{DB::table('orders')->whereBetween('created_at', [ $request->DateCreated.' 00:00:00', $request->EndDate.' 23:59:59'])->sum('payment')}}</td>
        <td>{{DB::table('orders')->whereBetween('created_at', [ $request->DateCreated.' 00:00:00', $request->EndDate.' 23:59:59'])->sum('dues')}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>