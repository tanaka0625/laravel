<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello/Index</title>
</head>
<body>
    <h1>Index</h1>
    @isset($msg)
    <p>こんにちわ{{$msg}}さん。</p>
    @else
    <p>何か書いてください。</p>
    @endisset
    <form action="/laravel/public/hello" method="POST">
        @csrf
        <input type="text" name="msg">
        <input type="submit">

    </form>
</body>
</html>