<x-page-layout> <!-- Using the page layout component for consistent page layout -->

@section('content') <!-- Defining the content section to be injected into the layout from the welcome page content section -->

<h1>Currently available sites</h1>
    
    <p>List of all sites</p>

        @if($sites->isEmpty()) <!--Check if there is any empty sites-->
                
            <p> No sites available </p>

            <a href = "/sites/create", class = "btn"> Create a new site </a> <!--Link to create a new site-->
                
        @else
            
            <ol> <!--Ordered list to display the sites-->
                    
                @foreach($sites as $site) <!-- Loop through each site from the  -->   
                        
                    <li>
                        
                        <p> {{ $site->name}} </p> <!--Display the name of the site-->
                            
                        <a href="/sites/{{ $site->id }}" class = "text-blue-500 hover:underline mb-4-inline-block"> Click for more details</a> <!-- Link to the site detail page for each site -->

                        <a href = "/sites/{{$site->id}}/edit" class = "text-blue-500 hover:underline mb-4 inline-block"> Edit Site</a> <!-- Link to the edit page for each site -->
                    </li>
                    
                @endforeach
                
            </ol>
            
        @endif
    @endsection

</x-page-layout>