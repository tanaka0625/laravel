<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        th {background-color: #999, color:fff; padding:5px 10px;}
        td {border: solid 1px #aaa; color:#999; padding:5px 10px;}
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
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