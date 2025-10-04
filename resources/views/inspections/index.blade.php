<x-page-layout> <!-- Using the page layout component to wrap the content of this page -->
    
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

</x-page-layout> <!-- Using the page layout component to wrap the content of this page -->