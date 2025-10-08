<x-page-layout>

@section('content')

<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg w-1/2">

    <h2 class="text-2xl font-bold mb-6 text-center">Edit Site</h2>

    <!-- Validation Error Message -->

    @if ($errors->any())

        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)

                    <li> {{$error}} </li>
                
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/sites/{{$site->id}}" method="POST"> <!-- Update the action URL to point to the correct update route -->

        @csrf

        @method('PUT')
        
        <div class="mb-4">
            <label class="block text-gray-700">Site Name</label>
            <input type="text" name="name" value="{{ old('name', $site->name) }}"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Capacity</label>
            <input type="text" name="capacity" value="{{ old('capacity', $site->capacity) }}"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Latitude</label>
            <input type="text" name="latitude" value="{{ old('latitude', $site->latitude) }}"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Longitude</label>
            <input type="text" name="longitude" value="{{ old('longitude', $site->longitude) }}"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit"
            class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600">
            Update Site
        </button>
    </form>
</div>
@endsection
</x-page-layout>