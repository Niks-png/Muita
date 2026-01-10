<x-app-layout>
    <div class="py-8">
        <div class="max-w-2xl mx-auto px-4">
            <div class="border border-gray-300 p-6 rounded">
                <h2 class="text-2xl font-bold mb-6 text-white">Edit User</h2>
                
                <form method="POST" action="{{ route('users.update', $user->id) }}" class="space-y-4">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label class="block text-blue-600 mb-1" for="username">Username</label>
                        <input class="w-full p-2 rounded border border-gray-300" type="text" name="username" id="username" value="{{ old('username', $user->username) }}" required>
                    </div>
                    
                    <div>
                        <label class="block text-blue-600 mb-1" for="full_name">Full Name</label>
                        <input class="w-full p-2 rounded border border-gray-300" type="text" name="full_name" id="full_name" value="{{ old('full_name', $user->full_name) }}" required>
                    </div>
                    
                    <div>
                        <label class="block text-blue-600 mb-1" for="role">Role</label>
                        <input class="w-full p-2 rounded border border-gray-300" type="text" name="role" id="role" value="{{ old('role', $user->role) }}" required>
                    </div>
                    
                    <div>
                        <label class="block text-blue-600 mb-1" for="active">Active</label>
                        <select class="w-full p-2 rounded border border-gray-300" name="active" id="active" required>
                            <option value="1" {{ old('active', $user->active) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('active', $user->active) == 0 ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    
                    <div class="flex gap-2 pt-4">
                        <button type="submit" class="text-sm font-medium px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">Update User</button>
                        <a href="{{ route('users.show', $user->id) }}" class="text-sm font-medium px-4 py-2 rounded bg-red-500 hover:bg-red-600 text-white">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>