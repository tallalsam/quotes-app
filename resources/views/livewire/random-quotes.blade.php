<div>
    <style>
        @media (max-width: 640px) {
            .container {
                padding: 1rem;
            }
        }
    </style>
    <div class="container mx-auto p-4" x-data="{ interval: 60000 }" x-init="
    setInterval(() => {
        $wire.fetchQuotes()
    }, interval);
">
        <h1 class="text-2xl font-bold text-center mb-6">Random Kanye West Quotes</h1>

        <div class="bg-white shadow-md rounded-lg p-6 space-y-4">
            @foreach($quotes as $quote)
                <div class="p-4 border-b last:border-b-0">
                    <p class="text-lg text-gray-800">{{ $quote }}</p>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-4">
            <button
                wire:click="fetchQuotes"
                class="bg-blue-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-blue-600">
                Refresh Quotes
            </button>
        </div>

        <div class="mt-4 text-center">
            <small class="text-gray-600">Quotes refresh every 60 seconds automatically.</small>
        </div>
    </div>


</div>

