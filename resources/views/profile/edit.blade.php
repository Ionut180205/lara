<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')
                        <label class="block mb-2 font-semibold">Name:</label>
                        <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" class="border rounded p-2 w-full">
                        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
