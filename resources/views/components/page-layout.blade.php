{{-- <!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SolarEye App </title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

    <!-- Navbar -->

    <header class="bg-blue-900 text-white shadow-md">
        <nav class="container mx-auto flex flex-wrap justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-3">
                <img src="data:image/jpeg;base64,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" alt="SolarEye Logo" class="w-18 h-18 rounded-full">
                <h1 class="text-2xl font-bold"><a href = "/" class = 'btn'> SolarEye </a> </h1>
            </div>

            <div class="flex space-x-6 text-lg font-medium">
                <a href="/sites" class="hover:text-yellow-300 transition">All Sites</a>
                <a href="/inspections" class="hover:text-yellow-300 transition">Inspections</a>
                <a href="/reports" class="hover:text-yellow-300 transition">Reports</a>
            </div>

            <div class="flex flex-wrap gap-2 mt-3 md:mt-0">
                <a href="/sites/create" class="bg-yellow-500 text-white-900 px-3 py-1.5 rounded-md font-semibold hover:bg-yellow-300 transition">+ Site</a>
                <a href="/inspections/create" class="bg-green-500 text-white-900 px-3 py-1.5 rounded-md font-semibold hover:bg-green-300 transition">+ Inspection</a>
                <a href="/reports/create" class="bg-red-500 text-white-900 px-3 py-1.5 rounded-md font-semibold hover:bg-orange-300 transition">+ Report</a>
            </div>
        </nav>
    </header>

    <!-- Main content -->
    <main class="flex-grow container mx-auto py-10 px-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white text-center py-4">
        <p class="text-lg">&copy; {{ date('Y') }} SolarEye. All rights reserved.</p>
    </footer>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SolarEye App</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-blue-900 text-white shadow-md">
        <nav class="container mx-auto flex flex-wrap justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-3">
                <!-- App Logo -->
                <img src= 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrYrMttUn1aIuH4h0PZ-7DDmbm_V9mSi30HQ&s' alt="SolarEye Logo" class="w-10 h-10 rounded-full">
                <span class="text-xl font-semibold tracking-wide"> <a href="/" class="hover:text-gray-200">SolarEye </a> </span>
            </div>

            <div class="space-x-4">
                <a href="/login" class="hover:text-gray-200">Login</a>
                <a href="/Register" class="hover:text-gray-200">Register</a>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <main class="flex-grow container mx-auto py-10 px-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white text-center py-3 mt-auto">
        <p>&copy; {{ date('Y') }} SolarEye. All rights reserved.</p>
    </footer>

</body>
</html>
