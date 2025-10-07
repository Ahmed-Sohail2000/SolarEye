<x-page-layout>
@section('content')

<form action = "{{route("sites.store")}}" method = "POST">

    @csrf <!-- CSRF token for security -->

<div class="flex justify-center py-16 bg-gray-50 min-h-screen">
    <div class="bg-white shadow-lg rounded-2xl p-10 w-full max-w-2xl border border-gray-200">
        
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Create a New Site</h1>

            <!-- Site Name -->
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Site Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-900"
                >
            </div>

            <!-- Site Capacity -->
            <div>
                <label for="capacity" class="block text-sm font-semibold text-gray-700 mb-2">Capacity (MW)</label>
                <input 
                    type = "integer" 
                    id = "capacity" 
                    name = "capacity" 
                    required
                    step = "0.01"
                    class = "w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-900 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                >
            </div>

            <!-- Site Latitude -->
            <div>
                <label for="latitude" class="block text-sm font-semibold text-gray-700 mb-2">Latitude</label>
                <input 
                    type="text" 
                    id="latitude" 
                    name="latitude" 
                    step="0.000001"
                    required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-900"
                >
            </div>

            <!-- Site Longitude -->
            <div>
                <label for="longitude" class="block text-sm font-semibold text-gray-700 mb-2">Longitude</label>
                <input 
                    type="text" 
                    id="longitude" 
                    name="longitude" 
                    step="0.000001"
                    required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-900"
                >
            </div>

            <!-- Related Site Dropdown -->
            <div>
                <label for="site_id" class="block text-sm font-semibold text-gray-700 mb-2">Parent Site</label>
                <select 
                    id="site_id" 
                    name="site_id" 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-900"
                >
                    <option value="" disabled selected>Select a site</option>
                    @foreach($sites as $site)
                        <option value="{{ $site->id }}">{{ $site->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg shadow-md transition-transform transform hover:-translate-y-1"
                >
                    Create Site
                </button>
            </div>
        </div>
    </div>
</form>

@endsection
</x-page-layout>
