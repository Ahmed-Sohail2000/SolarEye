<x-page-layout>

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-10 py-10">

    <!-- 🟡 Sites Section -->
    <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 text-white rounded-2xl shadow-lg p-8 text-center transition transform hover:-translate-y-2 hover:shadow-[0_0_25px_#facc15]">
        <h2 class="text-3xl font-bold mb-4">Sites</h2>
        <p class="text-yellow-100 mb-6">Manage and view all your solar sites efficiently.</p>
        <div class="space-x-3">
            <a href="/sites" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-lg transition">View Sites</a>
            <a href="/sites/create" class="bg-yellow-700 hover:bg-yellow-800 text-white px-4 py-2 rounded-lg transition">+ New Site</a>
        </div>
    </div>

    <!-- 🟢 Inspections Section -->
    <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-2xl shadow-lg p-8 text-center transition transform hover:-translate-y-2 hover:shadow-[0_0_25px_#22c55e]">
        <h2 class="text-3xl font-bold mb-4">Inspections</h2>
        <p class="text-green-100 mb-6">Review and record drone-based solar inspections.</p>
        <div class="space-x-3">
            <a href="/inspections" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-lg transition">View Inspections</a>
            <a href="/inspections/create" class="bg-green-800 hover:bg-green-900 text-white px-4 py-2 rounded-lg transition">+ New Inspection</a>
        </div>
    </div>

    <!-- 🔴 Reports Section -->
    <div class="bg-gradient-to-br from-red-500 to-red-600 text-white rounded-2xl shadow-lg p-8 text-center transition transform hover:-translate-y-2 hover:shadow-[0_0_25px_#ef4444]">
        <h2 class="text-3xl font-bold mb-4">Reports</h2>
        <p class="text-red-100 mb-6">Generate and manage automated fault reports.</p>
        <div class="space-x-3">
            <a href="/reports" class="bg-red-700 hover:bg-red-800 text-white px-4 py-2 rounded-lg transition">View Reports</a>
            <a href="/reports/create" class="bg-red-800 hover:bg-red-900 text-white px-4 py-2 rounded-lg transition">+ New Report</a>
        </div>
    </div>

</div>
@endsection
</x-page-layout>