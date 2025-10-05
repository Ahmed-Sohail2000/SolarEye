<x-page-layout> <!-- Using the page layout component to wrap the content of this page -->
    
    <title> Report Details </title>

    <p> {{$report->title}} </p> <!-- Display the report title -->
    <p> {{$report->severity}} </p> <!-- Display the report severity -->
    <a href =  "<p> {{$report->photo_url}}"> Photo image </a> </p> <!-- Display the report photo URL -->
    <p> {{$report->summary}} </p> <!-- Display the report summary -->

    <a href = "/reports"> Back to all reports </a> <!-- Link back to all reports page -->

</x-page-layout>