

    <div class="max-w-sm mx-auto bg-white shadow-md rounded-2xl p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Counter Form</h1>

        <div class="flex items-center justify-center gap-3 mb-6">
            <button wire:click="decrement" class="bg-gray-500 text-white px-4 py-2 rounded text-lg">-</button>

            <!-- Input akan otomatis mengikuti nilai $count -->
            <input type="text" wire:model="count" class="border text-center w-20 py-2 rounded-lg text-lg" readonly>

            <button wire:click="increment" class="bg-blue-500 text-white px-4 py-2 rounded text-lg">+</button>
        </div>

        <form wire:submit.prevent="save" class="text-center">
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
                Simpan
            </button>
        </form>

        @if (session('message'))
            <div class="mt-4 text-green-600 text-center font-medium">
                {{ session('message') }}
            </div>
        @endif
    </div>


