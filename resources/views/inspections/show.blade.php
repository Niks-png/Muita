<x-app-layout>
    <div class="border border-gray-300 p-6 rounded">
        <h2 class="text-2xl font-bold mb-4 text-white">{{$inspection
            ->username}} Details</h2>
            <p class="text-gray-400"><span class="text-white">Requested By:</span> {{ $inspection->requested_by }}</p>
            <p class="text-gray-400"><span class="text-white">Assigned To:</span> {{ $inspection->assigned_to }}</p>
            <p class="text-gray-400"><span class="text-white">Start Time:</span> {{ $inspection->start_ts }}</p>
            <p class="text-gray-400"><span class="text-white">Location:</span> {{ $inspection->location }}</p>
            <p class="text-gray-400"><span class="text-white">Checks:</span> {{ $inspection->checks ?? 'None' }}</p>
            </p>
            <div class="mt-4 flex space-x-4">
                <a href="{{ route('inspections.edit', $inspection->id) }}" class="inline-block text-white ">Edit</a>
                <a href="{{ route('inspections.index') }}" class="inline-block text-white ">Back to inspections</a>
            </div>
                <form action="{{ route('inspections.destroy', $inspection->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" text-white px-4 py-2 rounded text-sm">
                            Delete
                    </button>
                </form>
                
    </div>
</x-app-layout>