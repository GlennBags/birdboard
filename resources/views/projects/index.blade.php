<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>BirdBoard</h1>

    <ul>
        @foreach($projects as $project)
            <li>{{ $project }}</li>
        @endforeach
    </ul>
</body>
</html>
