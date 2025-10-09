<x-page-layout>
@section('content')

<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Create New Inspection</h1>

    <form action="{{ route('inspections.store') }}" method="POST" class="space-y-4 bg-white dark:bg-zinc-800 rounded-2xl shadow p-6">
        @csrf

        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Site</span>
            <select name="site_id" class="w-full p-2 rounded border border-gray-300 dark:border-gray-700">
                @foreach($sites as $site)
                    <option value="{{ $site->id }}">{{ $site->name }}</option>
                @endforeach
            </select>
        </label>

        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Inspection Date</span>
            <input type="date" name="inspection_date" class="w-full p-2 rounded border border-gray-300 dark:border-gray-700">
        </label>

        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Status</span>
            <input type="text" name="status" placeholder="Pending / Completed" class="w-full p-2 rounded border border-gray-300 dark:border-gray-700">
        </label>

        <label class="block">
            <span class="text-gray-700 dark:text-gray-300">Notes (optional)</span>
            <textarea name="notes" rows="3" class="w-full p-2 rounded border border-gray-300 dark:border-gray-700"></textarea>
        </label>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Create Inspection
        </button>
    </form>
</div>

@endsection
</x-page-layout>
