<x-app-layout>
    <div class="max-w-sm">
        <h2 class="text-2xl font-bold mb-4 text-white">Edit inspection</h2>
        <form method="POST" action="{{ route('inspections.update', $inspection->id) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-white" for="request_by">requested_by</label>
                <input class="p-2 rounded" type="text" name="requested" id="requested" value="{{ old('requested_by', $inspection->requested_by) }}" required>
            </div>
            <div>
                <label class="block text-white" for="assigned">assigned_to</label>
                <select id="role" name="role" required class="w-full p-2 px-4 py-2 bg-gray-700 border border-gray-500 rounded text-white">
                        <option value="analyst">Analyst</option>
                        <option value="inspector">Inspector</option>
                        <option value="broker">Broker</option>
                        <option value="admin">Admin</option>
                    </select>
            </div>
            <div>
                <label class="block text-white" for="start_ts">start_ts</label>
                <input class="p-2 rounded" type="text" name="start_ts" id="start_ts" value="{{ old('start_ts', $inspection->start_ts) }}" required>
            </div>
            <div>
                <label class="block text-white" for="location">location</label>
                <input class="p-2 rounded" type="text" name="location" id="location" value="{{ old('location', $inspection->location) }}" required>
            </div>
            
            
            <button type="submit" class=" text-white px-4 py-2 rounded">Update inspection</button>
            <a href="{{ route('inspections.show', $inspection->id) }}" class="ml-4 text-white hover:underline">Cancel</a>
        </form>
    </div>
</x-app-layout>