<x-app-layout>
    <div class="py-8">
        <div class="max-w-5xl mx-auto px-4">
            <div class="space-y-4">
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
                            <p class="text-xs text-gray-400">Priority</p>
                            <p class="text-sm">{{ $case->priority }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Arrival</p>
                            <p class="text-sm">{{ $case->arrival_ts }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Checkpoint</p>
                            <p class="text-sm">{{ $case->checkpoint_id }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Origin</p>
                            <p class="text-sm">{{ $case->origin_country }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Destination</p>
                            <p class="text-sm">{{ $case->destination_country }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Risk Flags</p>
                            <p class="text-sm">{{ $case->risk_flags ?? 'None' }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Declarant</p>
                            <p class="text-sm">{{ $case->declarant->name }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Consignee</p>
                            <p class="text-sm">{{ $case->consignee->name }}</p>
                        </div>
                        @if ($case->vehicle)
                        <div>
                            <p class="text-xs text-gray-400">Vehicle</p>
                            <p class="text-sm">{{ $case->vehicle->make }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>