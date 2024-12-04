<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#If Statemets</title>
</head>
<body>
    <h1>#If Statemets</h1>
    <hr>
    @verbatim
        <pre>
            @if (count($arr) === 1)
                i have one elemet!
            @elseif (count($arr) > 1)
                i have multiple elemet!
            @else
                i don't have any elemet!
            @endif
        </pre>
    @endverbatim
    <h2> Mảng @{{$arr}} :</h2>
        @if (count($arr) === 1)
            i have one elemet!
        @elseif (count($arr) > 1)
            i have multiple elemet!
        @else
            i don't have any elemet!
        @endif
</body>
</html>