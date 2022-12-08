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
    <p>$loopの例</p>
    @foreach ($nums as $num)
    @if ($loop->first)
    <p>データ一覧</p><ul>
    @endif
    <li>No,{{$loop->iteration}}.{{$num}}</li>
    @if ($loop->last)
    </ul><p>---ここまで</p>
    @endif
    @endforeach


</body>
</html>