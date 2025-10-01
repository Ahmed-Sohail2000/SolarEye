<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Reports for Solar Inspected Sites </title>
</head>
<body>
    
    <ol>

        @foreach($reports as $report) <!--Loop through each report from the report migration table-->

        <li> 

            {{$report->severity}} <!--Display the title of the report-->

            <a href = "/reports/{{$report->id}}"> Click for more details </a> <!-- Link to the report detail page for each report -->
       
        </li>
        
        @endforeach
    
    </ol>

</body>
</html>