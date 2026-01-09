<x-app-layout>
    <div class="max-w-sm">
        <h2 class="text-2xl font-bold mb-4 text-white">Edit inspection</h2>
        <form method="POST" action="{{ route('inspections.update', $inspection->id) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-white" for="request_by">requested_by:</label>
                <p class="text-white"> {{ $inspection->requested_by }}</p>
            </div>
            <div>
                <label class="block text-white" for="assigned">assigned_to:</label>
                <p class="text-white"> {{ $inspection->assigned_to }}</p>
            </div>
            <div>
                <label class="block text-white" for="start_ts">start_ts:</label>
                <p class="text-white"> {{ $inspection->start_ts }}</p>
            </div>
            <div>
                <label class="block text-white" for="location">location:</label>
                <p class="text-white">{{ $inspection->location }}</p>
            </div>
            <div>
                <lable class="block text-white" for="decision">decision:</lable>
                <select  >
                    <option value="release" {{ old('decision', $inspection->decision) == 'release' ? 'selected' : '' }}>Release</option>
                    <option value="reject" {{ old('decision', $inspection->decision) == 'reject' ? 'selected' : '' }}>Reject</option>
                    <option value="hold" {{ old('decision', $inspection->decision) == 'hold' ? 'selected' : '' }}>Hold</option>
                </select>
            </div>

            <div>
                <lable class="block text-white" for="statement">statement:</lable>
                <input class="w-[300px] p-2 rounded" type="text" id="statement" name="statement" value="{{ old('statement', $inspection->statement) }}" required>
            </div>

            
            
            <button type="submit" class=" text-white px-4 py-2 rounded">Update inspection</button>
            <a href="{{ route('inspections.show', $inspection->id) }}" class="ml-4 text-white hover:underline">Cancel</a>
        </form>
    </div>
</x-app-layout>