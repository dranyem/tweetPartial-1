<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="header">This is header</div>
    <div class="side-bar">This is sidebar</div>
    <div class="content">This is content
        @yield('content')</div>
    <div class="footer">This is footer</div>

</body>
</html>
