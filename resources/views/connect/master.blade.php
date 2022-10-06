<!DOCTYPE html>
<html>
<head>
    <title>Apuestas - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-
    ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1t" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ce553650b1.js" crossorigin="anonymous"></script>
</head>
<body>

    

    @section('content')
    Hola mundo
    @show

</body>
</html>