<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini blog</title>
</head>
<body>
    @foreach ($students as $student )
    <li><a href="{{$student->id}}">
        {{$student->name}}
    </a>
    </li>

    @endforeach

</body>
</html>
