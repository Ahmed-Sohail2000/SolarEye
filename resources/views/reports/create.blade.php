<x-page-layout>
@section('content')

<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Create Report</h1>

    <form action="{{ route('reports.store') }}" method="POST" class="space-y-4 bg-white dark:bg-zinc-800 rounded-2xl shadow p-6">
        @csrf

        <!-- Inspection -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Inspection</span>
            <select name="inspection_id" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
                @foreach($inspections as $inspection)
                    <option value="{{ $inspection->id }}">
                        {{ $inspection->site->name }} - {{ $inspection->inspection_date }}
                    </option>
                @endforeach
            </select>
        </label>

        <!-- Title -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Report Title</span>
            <input type="text" name="title" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white" required>
        </label>

        <!-- Summary -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Summary</span>
            <textarea name="summary" rows="4" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white" required></textarea>
        </label>

        <!-- Severity -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Severity</span>
            <select name="severity" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </label>

        <!-- Fault Type -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Fault Type</span>
            <input type="text" name="fault_type" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
        </label>

        <!-- Photo URL -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Photo URL</span>
            <input type="url" name="photo_url" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
        </label>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Create Report
        </button>
    </form>
</div>

@endsection
</x-page-layout>
