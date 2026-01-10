<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-white">Documents</h2>
                <a href="{{ route('documents.create') }}" class="text-sm font-medium px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 text-white">
                    + Add Document
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($documents as $document)
                    <div class="border border-gray-300 p-6 rounded text-white">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h4 class="text-lg font-semibold">
                                    Document #{{ $document->id }}
                                </h4>
                                <p class="text-blue-600">
                                    Case #{{ $document->keis_id }}
                                </p>
                            </div>

                            <a href="{{ route('documents.show', $document->id) }}" class="text-sm font-medium px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">View</a>
                        </div>
                        
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div>
                                <p class="text-xs text-blue-600">Document ID</p>
                                <p class="text-sm">{{ $document->id }}</p>
                            </div>

                            <div>
                                <p class="text-xs text-blue-600">Case ID</p>
                                <p class="text-sm">{{ $document->keis_id }}</p>
                            </div>

                            <div>
                                <p class="text-xs text-blue-600">Category</p>
                                <p class="text-sm">{{ $document->category }}</p>
                            </div>

                            <div class="md:col-span-2">
                                <p class="text-xs text-blue-600">File Name</p>
                                <p class="text-sm break-all">
                                    {{ $document->filename }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-6 flex justify-center">
                {{ $documents->links() }}
            </div>
        </div>
    </div>
</x-app-layout>