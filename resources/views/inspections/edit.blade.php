<x-app-layout>
    <div class="py-8">
        <div class="max-w-2xl mx-auto px-4">
            <div class="border border-gray-300 p-6 rounded">
                <h2 class="text-2xl font-bold mb-6 text-white">Edit Inspection #{{ $inspection->id }}</h2>
                
                <form method="POST" action="{{ route('inspections.update', $inspection->id) }}" class="space-y-4">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label class="block text-blue-600 mb-1">Requested By:</label>
                        <p class="text-white">{{ $inspection->requested_by }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-blue-600 mb-1">Assigned To:</label>
                        <p class="text-white">{{ $inspection->assigned_to }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-blue-600 mb-1">Start Time:</label>
                        <p class="text-white">{{ $inspection->start_ts }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-blue-600 mb-1">Location:</label>
                        <p class="text-white">{{ $inspection->location }}</p>
                    </div>
                    
                    <div>
                        <label class="block text-blue-600 mb-1" for="decision">Decision:</label>
                        <select id="decision" name="decision" class="w-full p-2 rounded border border-red-600 " required>
                            <option value="release" {{ old('decision', $inspection->decision) == 'release' ? 'selected' : '' }}>Release</option>
                            <option value="reject" {{ old('decision', $inspection->decision) == 'reject' ? 'selected' : '' }}>Reject</option>
                            <option value="hold" {{ old('decision', $inspection->decision) == 'hold' ? 'selected' : '' }}>Hold</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-blue-600 mb-1" for="statement">Statement:</label>
                        <input class="w-full p-2 rounded border border-gray-300" type="text" id="statement" name="statement" value="{{ old('statement', $inspection->statement) }}" required>
                    </div>

                    <div class="flex gap-2 pt-4">
                        <button type="submit" class="text-sm font-medium px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">Update inspection</button>
                        <a href="{{ route('inspections.show', $inspection->id) }}" class="text-sm font-medium px-4 py-2 rounded bg-red-500 hover:bg-red-600 text-white">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>