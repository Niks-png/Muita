<x-app-layout>
    <div class="py-8">
        <div class="max-w-2xl mx-auto px-4">
            <div class="border border-gray-300 p-6 rounded">
                <h2 class="text-2xl font-bold mb-6 text-white">Document Details</h2>
                <div class="space-y-3 mb-6">
                    <p class="text-white"><span class="text-blue-600">ID:</span> {{ $document->id }}</p>
                    <p class="text-white"><span class="text-blue-600">Case ID:</span> {{ $document->keis_id }}</p>
                    <p class="text-white"><span class="text-blue-600">File Name:</span> {{ $document->filename }}</p>
                    <p class="text-white"><span class="text-blue-600">MIME Type:</span> {{ $document->mime_type }}</p>
                    <p class="text-white"><span class="text-blue-600">Category:</span> {{ $document->category }}</p>
                    <p class="text-white"><span class="text-blue-600">Pages:</span> {{ $document->pages }}</p>
                    <p class="text-white"><span class="text-blue-600">Uploaded By:</span> {{ $document->uploaded_by }}</p>
                </div>

                <div>
                    <a href="{{ route('documents.index') }}" class="text-sm font-medium px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">
                        Back to Documents
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>