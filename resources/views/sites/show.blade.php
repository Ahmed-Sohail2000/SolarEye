    <x-page-layout> <!-- Using the page layout component to wrap the content of this page -->
    
    <div> 
        
        <h2> {{$site->name}}</h2> <!--Display the name of the site -->

        <p> Capacity (MW): {{$site->capacity}} </p> <!--Display the capacity of the site-->
        
        <p> Location: {{$site->latitude}}, {{$site->longitude}} </p> <!--Display the latitude and longitude of the site-->
        
        <p> Created at: {{$site->created_at}} </p> <!--Display the creation date of the site-->
    
    </div>
    
    <p><a href = "/sites"> Back to all sites </a></p> 

    </x-page-layout>