<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>This is Service page</h2>
    <h3>We operate Services in </br>
        location: Chandgaon,Chittagong </br>
        Mobile:01852120545

        <ul>
            @foreach ($arr as $b)
                <li>
                    {{$b}}
                </li>

            @endforeach
        </ul>

        <p>You are Currently viewing : {{$x}}</p>
        <p>Your NAME : {{$name}}</p>
        <p>You are EMAIL : {{$email}}</p>

    </h3>


</body>
</html>
