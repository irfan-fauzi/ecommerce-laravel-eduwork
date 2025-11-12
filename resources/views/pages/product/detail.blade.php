
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    
    <main>
        <main class="container mx-auto px-4 py-10">
            <h1 class="text-3xl font-bold mb-8 text-center">🛒 Detail Produk</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 bg-white p-6 rounded-2xl shadow-md">

                <!-- Gambar Produk -->
                <div class="flex justify-center items-center">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}"
                        class="object-cover rounded-2xl w-full max-w-md h-[350px] shadow-sm hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Detail Produk -->
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-3">{{ $product->name }}</h2>

                        <p class="text-2xl font-bold text-blue-600 mb-5">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>

                        <p class="text-gray-600 leading-relaxed mb-6">
                            Description: {{ $product->description }}
                        </p>

                        <p class="text-sm text-gray-500 mb-2">
                            <span class="font-medium text-gray-700">Kategori:</span>
                            {{ $product->category->name ?? 'Tidak ada' }}
                        </p>

                        <p class="text-sm text-gray-500 mb-6">
                            <span class="font-medium text-gray-700">Stok:</span> {{ $product->stock ?? 'N/A' }}
                        </p>
                        
                    </div>

                    <div class="flex gap-4 mt-4">
                        <button
                            class="flex-1 bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                            Tambah ke Keranjang
                        </button>

                        <a href="{{ route('products') }}"
                            class="flex-1 text-center border border-gray-400 text-gray-700 py-3 rounded-lg hover:bg-gray-100 transition-colors">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </main>
    <x-footer></x-footer>
</x-layout>
