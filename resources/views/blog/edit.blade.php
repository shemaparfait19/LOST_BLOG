<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Blog</title>
</head>
<body>
    <div class="max-w-sm mx-auto mt-10">
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('blog.update', $system->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')
            <h3 class="text-lg font-semibold mb-4">Edit Blog</h3>

            <label for="title" class="block mb-2">Blog Title</label>
            <input type="text" name="title" value="{{ $system->title }}" class="block w-full mb-4 p-2 border border-gray-300 rounded" required>

            <label for="image" class="block mb-2">Blog Image</label>
            <input type="file" name="image" class="block w-full mb-4">

            <label for="fewdesc" class="block mb-2">About This Blog</label>
            <input type="text" name="fewdesc" value="{{ $system->fewdesc }}" class="block w-full mb-4 p-2 border border-gray-300 rounded" required>

            <label for="moredesc" class="block mb-2">Blog Description</label>
            <textarea name="moredesc" class="block w-full mb-4 p-2 border border-gray-300 rounded" required>{{ $system->moredesc }}</textarea>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Update Blog</button>
        </form>
    </div>
</body>
</html>
<style>
    body{
        font-family: 'poppins';
    }
</style>