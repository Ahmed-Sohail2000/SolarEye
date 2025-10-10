<x-page-layout>
@section('content')

<div class="max-w-3xl mx-auto py-10 bg-white dark:bg-zinc-800 rounded-2xl shadow p-6 space-y-4">
    
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $report->title }}</h1>

    <p><strong>Inspection:</strong> {{ $report->inspection->site->name ?? 'N/A' }} ({{ $report->inspection->inspection_date ?? 'N/A' }})</p>
    <p><strong>Summary:</strong> {{ $report->summary }}</p>
    <p><strong>Severity:</strong> {{ ucfirst($report->severity) }}</p>
    <p><strong>Fault Type:</strong> {{ $report->fault_type ?? 'N/A' }}</p>

    @if($report->photo_url)
        <p><strong>Photo:</strong></p>
        <img src="{{ $report->photo_url }}" alt="Report Photo" class="w-full max-w-md rounded shadow">
    @endif

    <p><strong>Created at:</strong> {{ $report->created_at }}</p>

    <a href="{{ route('reports.index') }}" class="text-blue-600 hover:underline">Back to all reports</a>
</div>

@endsection
</x-page-layout>
