<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($cases as $case)
                <div class="border border-gray-300 p-6 rounded text-white">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h4 class="text-lg font-semibold">Case #{{ $case->id }}</h4>
                            <p class="text-gray-300">{{ $case->external_ref }}</p>
                        </div>
                        <span class="text-sm font-medium">{{ $case->status }}</span>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div>
                            <p class="text-xs text-blue-600">Priority</p>
                            <p class="text-sm">{{ $case->priority }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Arrival</p>
                            <p class="text-sm">{{ $case->arrival_ts }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Checkpoint</p>
                            <p class="text-sm">{{ $case->checkpoint_id }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Origin</p>
                            <p class="text-sm">{{ $case->origin_country }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Destination</p>
                            <p class="text-sm">{{ $case->destination_country }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Risk Flags</p>
                            <p class="text-sm">{{ $case->risk_flags ?? 'None' }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Declarant</p>
                            <p class="text-sm">{{ $case->declarant->name }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-blue-600">Consignee</p>
                            <p class="text-sm">{{ $case->consignee->name }}</p>
                        </div>
                        @if ($case->vehicle)
                        <div>
                            <p class="text-xs text-blue-600">Vehicle</p>
                            <p class="text-sm">{{ $case->vehicle->make }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-6 flex justify-center">
                {{ $cases->links() }}
            </div>
        </div>
    </div>
</x-app-layout>