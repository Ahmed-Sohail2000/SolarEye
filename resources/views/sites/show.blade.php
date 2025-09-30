<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Site 1 Detail</title>

</head>
<body>
    <div> 
        <h2> {{$site->name}}</h2> <!--Display the name of the site -->
        <p> Capacity (MW): {{$site->capacity}} </p> <!--Display the capacity of the site-->
        <p> Location: {{$site->latitude}}, {{$site->longitude}} </p> <!--Display the latitude and longitude of the site-->
        <p> Created at: {{$site->created_at}} </p> <!--Display the creation date of the site-->
    
    </div>
    
    <p><a href = "/sites"> Back to all sites </a></p> 

</body>
</html>