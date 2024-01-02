<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
</head>

<body>

    <a href="/">home</a>
    <a href="page1">page1</a>
    <a href="page2">page2</a>
    @yield('home')
    @yield('page1')
    @yield('page2')
</body>

</html>