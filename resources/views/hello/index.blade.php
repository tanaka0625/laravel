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
    <p>whileとphpの例</p>
    @php
        $counter = 0;
    @endphp
    @while ($counter < count($nums))
        <li>{{$nums[$counter]}}</li>
    @php
        $counter++;
    @endphp
    @endwhile



</body>
</html>