<x-app-layout>
    <div class="py-8">
        <div class="max-w-2xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-white mb-6">Create New User</h2>

            @if ($errors->any())
            <div class="mb-4 p-4 bg-gray-700 text-white rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('users.store') }}" method="POST" class="border border-gray-300 p-6 rounded text-white space-y-4">
                @csrf

                <div>
                    <label for="full_name" class="block text-sm mb-2">Full Name</label>
                    <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" required 
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-500 rounded text-white">
                </div>

                <div>
                    <label for="username" class="block text-sm mb-2">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required 
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-500 rounded text-white">
                </div>

                <div>
                    <label for="password" class="block text-sm mb-2">Password</label>
                    <input type="password" id="password" name="password" required 
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-500 rounded text-white">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required 
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-500 rounded text-white">
                </div>

                <div>
                    <label for="role" class="block text-sm mb-2">Role</label>
                    <select id="role" name="role" required class="w-full px-4 py-2 bg-gray-700 border border-gray-500 rounded text-white">
                        <option value="analyst">Analyst</option>
                        <option value="inspector">Inspector</option>
                        <option value="broker">Broker</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <div class="flex gap-2">
                    <button type="submit" class="bg-gray-600 hover:bg-gray-700 px-6 py-2 rounded">
                        Create User
                    </button>
                    <a href="{{ route('users.index') }}" class="bg-gray-600 hover:bg-gray-700 px-6 py-2 rounded">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
