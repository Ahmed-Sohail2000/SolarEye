{{-- <x-page-layout> <!-- Using the page layout component for consistent page layout -->

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
                        
                        <form action = "/sites/{{$site->id}}" method = "POST" class = "inline" >

                            @csrf

                            @method('DELETE')

                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                            
                                Delete
                            </button>
                        
                        </form>                    
                    
                    </li>
                    
                @endforeach
                
            </ol>
            
        @endif
        
    @endsection

</x-page-layout> --}}

<x-page-layout>

@section('content')

<div class="max-w-4xl mx-auto py-10">

    <h1 class="text-3xl font-bold text-gray-900 mb-6">Currently Available Sites</h1>
    <p class="text-gray-600 mb-6">List of all sites you are managing.</p>

    @if($sites->isEmpty())
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
            <p class="text-yellow-700 font-medium">No sites available.</p>
            <a href="/sites/create" class="mt-2 inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                Create a New Site
            </a>
        </div>
    @else
        <ul class="space-y-4">
            @foreach($sites as $site)
                <li class="bg-white dark:bg-zinc-800 rounded-lg shadow p-4 flex flex-col md:flex-row md:justify-between md:items-center space-y-2 md:space-y-0">
                    <div>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $site->name }}</p>
                        <div class="space-x-4 mt-2">
                            <a href="/sites/{{ $site->id }}" class="text-blue-500 hover:underline">View Details</a>
                            <a href="/sites/{{ $site->id }}/edit" class="text-blue-500 hover:underline">Edit Site</a>
                        </div>
                    </div>
                    <form action="/sites/{{ $site->id }}" method="POST" class="inline-block mt-2 md:mt-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                            Delete
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

</div>

@endsection

</x-page-layout>
