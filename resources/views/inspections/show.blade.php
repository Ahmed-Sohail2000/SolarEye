<x-page-layout> <!-- Using the page layout component to wrap the content of this page -->

<title> Inspection Details </title>

<ol>

<p> {{$inspection->inspection_date}} </p> <!-- Display the inspection date -->

<p> {{$inspection->notes}} </p> <!-- Display the inspection notes -->

<p> {{$inspection->status}} </p> <!-- Display the inspection status -->

</ol>

<a href = "/inspections"> Back to all inspections </a> <!-- Link back to all inspections page -->

</x-page-layout>