<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to SolarEye </title>

    @vite('resources/css/app.css') <!-- Link to the compiled CSS file using Vite -->
    
</head>
<body>
    
    <header>
        <nav>
            <h1> Solar Eye </h1>
            <a href = "/sites"> All Solar Sites</a>

            <a href = "/inspections"> All Inspections</a>

            <a href = "/reports"> All Reports</a>

            <a href = "/sites/create" class = 'btn'> New Solar Site! </a>
            
            <a href = "/inspections/create" class = "btn"> New Inspection! </a>
            
            <a href = "/reports/create" class = 'btn'> New Report! </a>
            
            <a href = '/' class = 'btn'> Back to Dashboard </a>

        </nav>
    
    </header>

    <main class = "container"> 

        {{$slot}} <!-- This is where the content of each page will be injected -->
    
    </main>

</body>
</html>