<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Form</title>
</head>
<body>
{{--<form action="{{ route('/search/$searchkey') }}" method="get">--}}
    {{--<input type="text" name="searchkey" placeholder="Search here">--}}
    {{--<input type="submit" value="submit">--}}
{{--</form>--}}
    @foreach($courses as $course)
        {{$course->name}} <br>
    @endforeach
</body>
</html>