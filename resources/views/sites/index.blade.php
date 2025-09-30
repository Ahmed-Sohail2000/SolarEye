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

            @if($sites->isEmpty()) <!--Check if there is any empty sites-->
                
                <p> No sites available </p>

                <a href = "/sites/create", class = "btn"> Create a new site </a> <!--Link to create a new site-->
                
            @else
            
                <olL> <!--Ordered list to display the sites-->
                    @foreach($sites as $site) <!-- Loop through each site from the  -->   
                        
                        <li>
                            <a href="/sites/{{ $site->id }}"> {{ $site->name}}</a> <!-- Link to the site detail page for each site -->
                        </li>
                    
                    @endforeach
                
                </ol>
            
            @endif

    </body>    
    </html>