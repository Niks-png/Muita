<x-app-layout>
    <div class="py-8">
        <div class="max-w-5xl mx-auto px-4">
            <div class="border border-gray-300 p-6 rounded">
                <h2 class="text-2xl font-bold mb-6 text-white">{{$user->username}} Details</h2>
                <div class="space-y-3 mb-6">
                    <p class="text-white"><span class="text-blue-600">ID:</span> {{ $user->id }}</p>
                    <p class="text-white"><span class="text-blue-600">Username:</span> {{ $user->username }}</p>
                    <p class="text-white"><span class="text-blue-600">Full name:</span> {{ $user->full_name }}</p>
                    <p class="text-white"><span class="text-blue-600">Role:</span> {{ $user->role }}</p>
                    <p class="text-white"><span class="text-blue-600">Active:</span> 
                        @if ($user->active == 1)
                            true
                        @else
                            false
                        @endif
                    </p>
                </div>

                <div class="flex gap-2">
                    <a href="{{ route('users.edit', $user->id) }}" class="text-sm font-medium px-4 py-2 rounded bg-yellow-500 hover:bg-yellow-600 text-white">Edit</a>
                    <a href="{{ route('users.index') }}" class="text-sm font-medium px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">Back to users</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm font-medium px-4 py-2 rounded bg-red-500 hover:bg-red-600 text-white">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>