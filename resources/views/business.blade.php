<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>This is Business page</h2>
    <h3>We operate business in </br>
        location: Chandgaon,Chittagong </br>
        Mobile:01852120545

        <ul>
            @foreach ($businesses as $b)
                <li>
                    {{$b}}
                </li>

            @endforeach
        </ul>

        <p>You are Currently viewing : {{$type}}</p>

    </h3>


</body>
</html>
