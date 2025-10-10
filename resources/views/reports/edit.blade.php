<x-page-layout>
@section('content')

<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Edit Report</h1>

    <form action="{{ route('reports.update', $report->id) }}" method="POST" class="space-y-4 bg-white dark:bg-zinc-800 rounded-2xl shadow p-6">
        @csrf
        @method('PUT')

        <!-- Inspection -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Inspection</span>
            <select name="inspection_id" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
                @foreach($inspections as $inspection)
                    <option value="{{ $inspection->id }}" {{ $report->inspection_id == $inspection->id ? 'selected' : '' }}>
                        {{ $inspection->site->name }} - {{ $inspection->inspection_date }}
                    </option>
                @endforeach
            </select>
        </label>

        <!-- Title -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Report Title</span>
            <input type="text" name="title" value="{{ $report->title }}" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white" required>
        </label>

        <!-- Summary -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Summary</span>
            <textarea name="summary" rows="4" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white" required>{{ $report->summary }}</textarea>
        </label>

        <!-- Severity -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Severity</span>
            <select name="severity" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
                <option value="low" {{ $report->severity == 'low' ? 'selected' : '' }}>Low</option>
                <option value="medium" {{ $report->severity == 'medium' ? 'selected' : '' }}>Medium</option>
                <option value="high" {{ $report->severity == 'high' ? 'selected' : '' }}>High</option>
            </select>
        </label>

        <!-- Fault Type -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Fault Type</span>
            <input type="text" name="fault_type" value="{{ $report->fault_type }}" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
        </label>

        <!-- Photo URL -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Photo URL</span>
            <input type="url" name="photo_url" value="{{ $report->photo_url }}" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
        </label>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Update Report
        </button>
    </form>
</div>

@endsection
</x-page-layout>
