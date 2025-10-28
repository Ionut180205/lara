<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="text-left px-3 py-2 text-sm font-semibold text-gray-700">ID</th>
                                    <th class="text-left px-3 py-2 text-sm font-semibold text-gray-700">Name</th>
                                    <th class="text-left px-3 py-2 text-sm font-semibold text-gray-700">Email</th>
                                    <th class="text-left px-3 py-2 text-sm font-semibold text-gray-700">Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr class="border-t">
                                        <td class="px-3 py-2 text-sm text-gray-800">{{ $user->id }}</td>
                                        <td class="px-3 py-2 text-sm text-gray-800 font-medium">{{ $user->name }}</td>
                                        <td class="px-3 py-2 text-sm text-gray-800">{{ $user->email }}</td>
                                        <td class="px-3 py-2 text-sm text-gray-800">{{ $user->created_at?->format('Y-m-d H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr class="border-t">
                                        <td colspan="4" class="px-3 py-6 text-center text-gray-500">Nu există utilizatori.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
