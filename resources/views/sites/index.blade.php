<!DOCTYPE html> 
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
        @foreach($sites as $site) <!-- Loop through each site -->
            <li>
                <a href="/sites/{{ $site->id }}"> {{ $site->name}}</a> <!-- Link to the show page for each site -->
            </li>
        @endforeach
    </ul>

</body>
</html>

