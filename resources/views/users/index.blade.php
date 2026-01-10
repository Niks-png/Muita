<x-app-layout> 
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-white">Users</h2>
                <a href="{{ route('users.create') }}" class="text-sm font-medium px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 text-white">
                    + Add User
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($users as $user)
                <div class="border border-gray-300 p-6 rounded text-white flex justify-between items-center">
                    <div class="flex-1">
                        <h4 class="text-lg font-semibold">{{ $user->full_name }}</h4>
                        <span class="inline-block mt-2 px-3 py-1 text-xs font-medium rounded">
                            {{ ucfirst($user->role) }}
                        </span>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('users.show', $user->id) }}" class="text-sm font-medium px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">
                            View
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="mt-6 flex justify-center">
        {{ $users->links() }}
    </div>
</x-app-layout>