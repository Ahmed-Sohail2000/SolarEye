<x-page-layout> <!-- Using the page layout component to wrap the content of this page -->
    <ol>

        @foreach($reports as $report) <!--Loop through each report from the report migration table-->

        <li> 

            {{$report->severity}} <!--Display the title of the report-->

            <a href = "/reports/{{$report->id}}"> Click for more details </a> <!-- Link to the report detail page for each report -->
       
        </li>
        
        @endforeach
    
    </ol>
</x-page-layout>