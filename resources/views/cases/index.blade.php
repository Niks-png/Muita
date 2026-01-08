<x-app-layout>


        @foreach ($cases as $case)
        <div style="color: white; ">
            <p>ID: {{ $case->id }}</p>
            <p>External Ref: {{ $case->external_ref }}</p>
            <p>Status: {{ $case->status }}</p>
            <p>Priority: {{ $case->priority }}</p>
            <p>Arrival: {{ $case->arrival_ts }}</p>
            <p>Checkpoint: {{ $case->checkpoint_id }}</p>
            <p>Origin: {{ $case->origin_country }}</p>
            <p>Destination: {{ $case->destination_country }}</p>
            <p>Risk Flags: {{ $case->risk_flags }}</p>
            <p>Declarant: {{ $case->declarant->name }}</p>
            <p>Consignee: {{ $case->consignee->name}}</p>
            <p>Vehicle: {{ $case->vehicle?->make ?? 'N/A' }}</p>
        </div>
    @endforeach
</x-app-layout>