<x-app-layout>
    <div class="py-8">
        <div class="max-w-5xl mx-auto px-4">
            <div class="space-y-4">
                @foreach ($documents as $document)
                    <div class="border border-gray-300 p-6 rounded text-white">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h4 class="text-lg font-semibold">
                                    Document #{{ $document->id }}
                                </h4>
                                <p class="text-gray-300">
                                    Case #{{ $document->keis_id }}
                                </p>
                            </div>

                            <a
                                href="{{ route('documents.show', $document->id) }}"
                                class="text-sm font-medium px-3 py-1 rounded"
                            >
                                View
                            </a>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div>
                                <p class="text-xs text-gray-400">Document ID</p>
                                <p class="text-sm">{{ $document->id }}</p>
                            </div>

                            <div>
                                <p class="text-xs text-gray-400">Case ID</p>
                                <p class="text-sm">{{ $document->keis_id }}</p>
                            </div>

                            <div>
                                <p class="text-xs text-gray-400">Category</p>
                                <p class="text-sm">{{ $document->category }}</p>
                            </div>

                            <div class="md:col-span-2">
                                <p class="text-xs text-gray-400">File Name</p>
                                <p class="text-sm break-all">
                                    {{ $document->filename }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
