<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($inspections as $inspection)
                <div class="border border-gray-300 p-6 rounded text-white">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-lg font-semibold">Inspection #{{ $inspection->id }}</h4>
                            <p class="text-white">Case {{ $inspection->case_id }}</p>
                        </div>
                        <span class="text-sm font-medium">{{ $inspection->type }}</span>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div>
                            <p class="text-xs text-blue-600">Requested By</p>
                            <p class="text-sm">{{ $inspection->requested_by }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Assigned To</p>
                            <p class="text-sm">{{ $inspection->assigned_to }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Start Time</p>
                            <p class="text-sm">{{ $inspection->start_ts }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Location</p>
                            <p class="text-sm">{{ $inspection->location }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Checks</p>
                            <p class="text-sm">{{ $inspection->checks ?? 'None' }}</p>
                        </div>
                        <div>
                            <a href="{{ route('inspections.show', $inspection->id) }}" class="text-sm font-medium px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">
                                View
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>        
            <div class="mt-6 flex justify-center">
                {{ $inspections->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
