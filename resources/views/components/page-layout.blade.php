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
                    @guest
                        
                        <a href="{{ route('login') }}" class="hover:text-gray-200">Login</a>
                        <a href="{{ route('register') }}" class="hover:text-gray-200">Register</a>
                    @else
        
                        <span class="font-semibold">Welcome, {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
            
                    @csrf
                    
                        <button type="submit" class="hover:text-gray-200 ml-2">Logout</button>
                    </form>
                    
                    @endguest

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
