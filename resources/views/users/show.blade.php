<x-app-layout>
    <div class="border border-gray-300 p-6 rounded">
        <h2 class="text-2xl font-bold mb-4 text-white">{{$user->username}} Details</h2>
            <p class="text-gray-400"><span class="text-white">ID:</span> {{ $user->id }}</p>
            <p class="text-gray-400"><span class="text-white">Username:</span> {{ $user->username }}</p>
            <p class="text-gray-400"><span class="text-white">Full name:</span> {{ $user->full_name }}</p>
            <p class="text-gray-400"><span class="text-white">Role:</span> {{ $user->role }}</p>
            <p class="text-gray-400"><span class="text-white">Active:</span> 
                @if ($user->active == 1)
                    true
                @else
                    false
                @endif
            </p>
            <div class="mt-4 flex space-x-4">
                <a href="{{ route('users.edit', $user->id) }}" class="inline-block text-white ">Edit</a>
                <a href="{{ route('users.index') }}" class="inline-block text-white ">Back to users</a>
            </div>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" text-white px-4 py-2 rounded text-sm">
                            Delete
                    </button>
                </form>
    </div>
</x-app-layout>