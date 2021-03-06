<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation Email</title>
    <style>
        table thead tr,table tbody tr{
            border-bottom: 1px dotted #0a0a0a;
        }
    </style>
</head>
<body>
<h1>Your Order Confirmed</h1>
<p>
    Dear {{$customer->name}} <br>
    Your Order <strong>id# {{$order->id}}</strong> for
    <mark>{{$order->description}}</mark>
    has been confirmed.
</p>
<h3>==============Order Details===============</h3>
<table>
    <thead>
    <tr>
        <th width="80">Order No</th>
        <th width="300">Description</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->description}}</td>
        <td>{{$order->unit_price}}</td>
        <td>{{$order->qty}}</td>
        <td>BDT. {{$order->total}}</td>
    </tr>
    <tr>
        <td colspan="4" align="right">Total : </td>
        <td>BDT. {{$order->total}}</td>
    </tr>
    <tr>
        <td colspan="4" align="right">Payment : </td>
        <td>BDT. {{$order->payment}}</td>
    </tr>
    <tr>
        <td colspan="4" align="right">Dues : </td>
        <td>BDT. {{$order->dues}}</td>
    </tr>
    </tbody>
</table>
<p>For any kind of query please contact 01843306208.</p>
<h3>Thank You<br>
    <strong>Flexible It & Design Solution</strong>
</h3>

</body>
</html>