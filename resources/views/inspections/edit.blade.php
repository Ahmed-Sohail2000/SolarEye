<x-page-layout>
@section('content')

<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Edit Inspection</h1>

    <form action="{{ route('inspections.update', $inspection) }}" method="POST" class="space-y-4 bg-white dark:bg-zinc-800 rounded-2xl shadow p-6">
        @csrf
        @method('PUT')

        <!-- Select Site -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Site</span>
            <select name="site_id" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
                @foreach($sites as $site)
                    <option value="{{ $site->id }}" {{ $inspection->site_id == $site->id ? 'selected' : '' }}>
                        {{ $site->name }}
                    </option>
                @endforeach
            </select>
        </label>

        <!-- Inspection Date -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Inspection Date</span>
            <input type="date" name="inspection_date" value="{{ $inspection->inspection_date }}" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
        </label>

        <!-- Notes -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Notes</span>
            <textarea name="notes" rows="4" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">{{ $inspection->notes }}</textarea>
        </label>

        <!-- Status -->
        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Status</span>
            <select name="status" class="w-full p-2 rounded border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white">
                <option value="pending" {{ $inspection->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $inspection->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="in_progress" {{ $inspection->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            </select>
        </label>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Update Inspection
        </button>
    </form>
</div>

@endsection
</x-page-layout>
