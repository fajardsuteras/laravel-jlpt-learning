<div class="p-8 bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-3xl mx-auto bg-white p-8 shadow-lg rounded-lg text-center">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">
            {{ __('JLPT Learning & Assessment') }}
        </h1>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition">
                {{ __('Learning') }}
            </a>
            <a href="#" class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md transition">
                {{ __('Assessment Training') }}
            </a>
        </div>

        <div class="mt-6 flex justify-center gap-4">
            <button wire:click="switchLanguage('id')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-lg shadow-md transition">
                🇮🇩 ID
            </button>
            <button wire:click="switchLanguage('en')" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-lg shadow-md transition">
                🇬🇧 EN
            </button>
        </div>
    </div>
</div>
