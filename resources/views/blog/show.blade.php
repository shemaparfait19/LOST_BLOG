<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $system->title }} - RwandaBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <h1 class="text-2xl font-bold">RwandaBlog</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-600 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-500">About</a></li>
                <li><a href="#" class="text-gray-600 hover:text-blue-500">Contact</a></li>
                
                @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth
                @endif
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<main class="container mx-auto my-8 px-4">
    <article class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset($system->image) }}" alt="Story image" class="w-full h-60 object-cover">
        <div class="p-4">
            <h2 class="text-3xl font-semibold mb-2">{{ $system->title }}</h2>
            <p class="text-gray-600 mb-4">Published on: {{ $system->created_at->format('F j, Y') }}</p>
            <p class="text-gray-800 mb-4">{{ $system->moredesc }}</p>
            <a href="{{ route('blog.guest') }}" class="text-blue-500 hover:underline">Back to Blog</a>
        </div>
    </article>
</main>


<!-- Footer -->
<footer class="bg-gray-800 text-white py-6 mt-auto">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 RwandaBlog</p>
        <ul class="flex justify-center space-x-4 mt-4">
            <li><a href="#" class="text-gray-400 hover:text-white">Facebook</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Twitter</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white">Instagram</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
