<x-app-layout>
    <div class="py-8">
        <div class="max-w-5xl mx-auto px-4">
            <div class="border border-gray-300 p-6 rounded">
                <h2 class="text-2xl font-bold mb-6 text-white">Inspection #{{ $inspection->id }} Details</h2>
                <div class="space-y-3 mb-6">
                    <p class="text-white"><span class="text-blue-600">Requested By:</span> {{ $inspection->requested_by }}</p>
                    <p class="text-white"><span class="text-blue-600">Assigned To:</span> {{ $inspection->assigned_to }}</p>
                    <p class="text-white"><span class="text-blue-600">Start Time:</span> {{ $inspection->start_ts }}</p>
                    <p class="text-white"><span class="text-blue-600">Location:</span> {{ $inspection->location }}</p>
                    <p class="text-white"><span class="text-blue-600">Checks:</span> {{ $inspection->checks ?? 'None' }}</p>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('inspections.edit', $inspection->id) }}" class="text-sm font-medium px-4 py-2 rounded bg-yellow-500 hover:bg-yellow-600 text-white">Edit</a>
                    <a href="{{ route('inspections.index') }}" class="text-sm font-medium px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">Back to inspections</a>
                    <form action="{{ route('inspections.destroy', $inspection->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
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