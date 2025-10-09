<x-page-layout>

@section('content')

<div class="max-w-3xl mx-auto py-10">

    <!-- Site Info Card -->
    <div class="bg-white dark:bg-zinc-800 rounded-2xl shadow-lg p-8 space-y-4">

        <!-- Site Name -->
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $site->name }}</h2>

        <!-- Site Details -->
        <div class="space-y-2 text-gray-700 dark:text-gray-300">
            <p><span class="font-semibold">Capacity (MW):</span> {{ $site->capacity }}</p>
            <p><span class="font-semibold">Location:</span> {{ $site->latitude }}, {{ $site->longitude }}</p>
            <p><span class="font-semibold">Created At:</span> {{ $site->created_at->format('F j, Y, g:i a') }}</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Action Buttons -->
        <div class="mt-4 flex space-x-4">
            <a href="/sites" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                Back to All Sites
            </a>
            <a href="/sites/{{ $site->id }}/edit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded transition">
                Edit Site
            </a>
        </div>

    </div>

</div>

@endsection

</x-page-layout>
