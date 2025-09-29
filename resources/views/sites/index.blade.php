{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solar Eye | Home |</title>
</head>
<body>
    <h1>Currently available sites</h1>
    <p> List of all sites</p>

    <ul>
        <li> <a href = "/sites/{{$site -> id}}"> {{$site -> title}} </a> </li>
        <li>site 2</li>
        <li>site 3</li>
    </ul>

</body>
</html> --}}

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solar Eye | Home</title>
</head>
<body>
    <h1>Currently available sites</h1>
    <p>List of all sites</p>

    <ul>
        @foreach($sites as $site)
            <li>
                <a href="/site/{{ $site->id }}"> {{ $site->name}}</a>
            </li>
        @endforeach
    </ul>

</body>
</html>

