<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorcerers Network | Home</title>
</head>
<body>
    <h2> Currently Available Sorcerers</h2>
    <p>{{ $greeting }}</p>


    <ul>
        <li>
            <a href="/sorcerers/{{ $sorcerers[0]["id"] }}">
                {{ $sorcerers[0]["name"] }}
            </a>
        </li>
        <li>
            <a href="/sorcerers/{{ $sorcerers[1]["id"] }}">
                {{ $sorcerers[1]["name"] }}
            </a>
        </li>
    </ul>
</body>
</html>