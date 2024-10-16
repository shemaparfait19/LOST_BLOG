<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome to shemBLOG managment system!") }}<br>
                    <ul class="flex px-6">
                        <li class="text-blue p-6">
                            <a href="{{ route('blog.create') }}"><button>Create a Post</a>
                        </li>
                        <li  class="text-blue p-6">
                            <a href="{{ route('blog.index') }}">View Posts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
