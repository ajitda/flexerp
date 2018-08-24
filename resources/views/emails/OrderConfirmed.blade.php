<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation Email</title>
</head>
<body>
<h1>Your Order Confirmed</h1>
<p>
    Dear {{$customer->name}} <br>
    Your Order <strong>id# {{$order->id}}</strong> for <br>
    <mark>{{$order->description}}</mark>
    has been confirmed.
</p>
<p>For any kind of query please contact 01843306208.</p>
<h3>Thank You</h3>
<h4>Flexible It & Design Solution</h4>
</body>
</html>