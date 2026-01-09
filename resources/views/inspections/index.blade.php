<x-app-layout>
    <div class="py-8">
        <div class="max-w-5xl mx-auto px-4">
            <div class="space-y-    4">
                @foreach ($inspections as $inspection)
                <div class="border border-gray-300 p-6 rounded text-white">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-lg font-semibold">Inspection #{{ $inspection->id }}</h4>
                            <p class="text-gray-300">Case {{ $inspection->case_id }}</p>
                        </div>
                        <span class="text-sm font-medium">{{ $inspection->type }}</span>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div>
                            <p class="text-xs text-gray-400">Requested By</p>
                            <p class="text-sm">{{ $inspection->requested_by }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Assigned To</p>
                            <p class="text-sm">{{ $inspection->assigned_to }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Start Time</p>
                            <p class="text-sm">{{ $inspection->start_ts }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Location</p>
                            <p class="text-sm">{{ $inspection->location }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Checks</p>
                            <p class="text-sm">{{ $inspection->checks ?? 'None' }}</p>
                        </div>
                        <a href="{{ route('inspections.show', $inspection->id) }}" class=" hover:bg-gray-700 px-4 py-2 rounded text-sm">
                            View
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>