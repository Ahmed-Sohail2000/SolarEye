<x-page-layout>

@section('content')

<div class="max-w-5xl mx-auto py-10">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Inspections</h1>
        <a href="/inspections/create" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition">
            + New Inspection
        </a>
    </div>

    @if($inspections->isEmpty())
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded">
            No inspections available.
            <a href="/inspections/create" class="underline text-yellow-800">Create a new inspection</a>
        </div>
    @else
        <div class="space-y-4">
            @foreach($inspections as $inspection)
                <div class="bg-white dark:bg-zinc-800 rounded-2xl shadow p-6 flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $inspection->id }}</h2>
                        <p class="text-gray-600 dark:text-gray-300">Site: {{ $inspection->site->name ?? 'N/A' }}</p>
                        <p class="text-gray-600 dark:text-gray-300">Date: {{ $inspection->inspection_date }}</p>
                    </div>
                    <div class="flex space-x-3">
                        <a href="/inspections/{{ $inspection->id }}" class="text-blue-600 hover:underline">View</a>
                        <a href="/inspections/{{ $inspection->id }}/edit" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="/inspections/{{ $inspection->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</div>

@endsection

</x-page-layout> 
