<x-page-layout>
@section('content')

<div class="max-w-5xl mx-auto py-10">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Reports</h1>
        <a href="{{ route('reports.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition">
            + New Report
        </a>
    </div>

    @if($reports->isEmpty())
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded">
            No reports available.
            <a href="{{ route('reports.create') }}" class="underline text-yellow-800">Create a new report</a>
        </div>
    @else
        <div class="space-y-4">
            @foreach($reports as $report)
                <div class="bg-white dark:bg-zinc-800 rounded-2xl shadow p-6 flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $report->title }}</h2>
                        <p class="text-gray-600 dark:text-gray-300">Inspection: {{ $report->inspection->site->name ?? 'N/A' }} ({{ $report->inspection->inspection_date ?? 'N/A' }})</p>
                        <p class="text-gray-600 dark:text-gray-300">Severity: {{ ucfirst($report->severity) }}</p>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('reports.show', $report->id) }}" class="text-blue-600 hover:underline">View</a>
                        <a href="{{ route('reports.edit', $report->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('reports.destroy', $report->id) }}" method="POST" class="inline">
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
