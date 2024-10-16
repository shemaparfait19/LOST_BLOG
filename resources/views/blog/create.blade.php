<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create a blog</title>
</head>

<body class="bg-gray-100">
    <div class="flex justify-center items-center min-h-screen">

       
        <form action="{{ route('blog.insert') }}" method="post" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
            @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
                
            @endif

            @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <h3 class="text-2xl font-bold mb-6 text-gray-800 text-center">Create Blog</h3>
            @csrf
            
            <!-- Blog Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Blog Title</label>
                <input type="text" name="title" placeholder="Enter Blog Title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <!-- Blog Image -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Blog Image</label>
                <input type="file" name="image" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- About This Blog -->
            <div class="mb-4">
                <label for="fewdesc" class="block text-sm font-medium text-gray-700 mb-1">About This Blog</label>
                <input type="text" name="fewdesc" placeholder="Enter a short description" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <!-- Blog Description -->
            <div class="mb-6">
                <label for="moredesc" class="block text-sm font-medium text-gray-700 mb-1">Blog Description</label>
                <textarea name="moredesc" rows="4" placeholder="Enter detailed blog description" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Submit Blog
                </button>
            </div>
        </form>
    </div>
</body>

</html>
<style>
    body{
        font-family: 'poppins';
    }
</style>