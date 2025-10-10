<title> Inspection Details </title>

<ol>
<x-page-layout>

@section('content')

<div class="max-w-3xl mx-auto py-10">

    <div class="bg-white dark:bg-zinc-800 rounded-2xl shadow p-6 space-y-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            Inspection Details
        </h1>

        <p class="text-gray-600 dark:text-gray-300">
            <strong>Site:</strong>
            <a href="/sites/{{ $inspection->site_id }}" class="text-blue-600 hover:underline">
                {{ $inspection->site->name ?? 'N/A' }}
            </a>
        </p>

        <p class="text-gray-600 dark:text-gray-300">
            <strong>Inspection Date:</strong> {{ $inspection->inspection_date }}
        </p>

        <p class="text-gray-600 dark:text-gray-300">
            <strong>Status:</strong> {{ $inspection->status }}
        </p>

        @if(!empty($inspection->notes))
            <p class="text-gray-600 dark:text-gray-300">
                <strong>Notes:</strong> {{ $inspection->notes }}
            </p>
        @endif

        <div class="mt-4 flex space-x-4">
            <a href="/inspections" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition">
                ← Back to all inspections
            </a>

            <a href = "/inspections/{{$inspection->id}}/edit" class = "bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded transition">
                Edit inspection
            </a>
        </div>
    </div>

</div>

@endsection

</x-page-layout> 
