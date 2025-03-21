<div class="p-8 bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-3xl mx-auto bg-white p-8 shadow-lg rounded-lg text-center">
        <h1 class="text-2xl font-bold mb-4">Hiragana Converter</h1>

        <textarea wire:model="inputText" class="w-full border p-2 rounded-lg" rows="3" placeholder="Masukkan teks..."></textarea>

        <button wire:click="convertToHiragana" class="mt-4 px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg">
            Convert
        </button>

        @if($convertedText)
            <div class="mt-4 p-4 bg-gray-200 rounded-lg">
                <p class="text-lg font-semibold">Hasil:</p>
                <p class="text-xl">{{ $convertedText }}</p>
            </div>
        @endif
    </div>
</div>
