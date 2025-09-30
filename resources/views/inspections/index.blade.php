<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Inspections Made</title>
</head>
<body>
    <h1>Solar Inspections Made</h1>
    <p>List of all inspections</p>

    <ol>

        @foreach($inspections as $inspection) <!-- Loop through each inspection from the inspection migration table  -->

            <li> 
                
                {{$inspection->inspection_date}} <!--Display the name of the inspection-->
            
                <a href = "/inspections/{{$inspection->id}}"> Click for more details </a> <!-- Link to the inspection detail page for each inspection -->
                
            </li>
        @endforeach

    </ol>
</body>
</html>