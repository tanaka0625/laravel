<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2>※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div>
        @yield('content')
    </div>
    <div>
        @yield('footer')
    </div>
</body>
</html>