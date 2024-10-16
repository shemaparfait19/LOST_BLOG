<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blogs</title>
</head>
<body>
    <div class="max-w-4xl mx-auto mt-10">
        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <h2 class="text-2xl font-semibold mb-4">Blog List</h2>
        <a href="{{ route('blog.create') }}" class="bg-blue-500 text-white p-2 rounded mb-4 inline-block">Create Blog</a>

        <table class="min-w-full border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Title</th>
                    <th class="border border-gray-300 p-2">Image</th>
                    <th class="border border-gray-300 p-2">Few Description</th>
                    <th class="border border-gray-300 p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($systems as $system)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $system->title }}</td>
                        <td class="border border-gray-300 p-2">
                          <img src="{{ asset($system->image) }}" 
                          class="h-20">
                        </td>
                        <td class="border border-gray-300 p-2">{{ $system->fewdesc }}</td>
                        <td class="border border-gray-300 p-2">
                            <a href="{{ route('blog.edit', $system->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('blog.destroy', $system->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
<style>
  body{
    font-family: 'poppins';
  }
</style>
