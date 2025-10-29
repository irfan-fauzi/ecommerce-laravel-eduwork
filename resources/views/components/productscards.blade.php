@props(['products'])

<ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($products as $product)
        <li class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden">
            <div class="relative w-full h-56 bg-gray-100">
                <img src="{{ $product->image }}" alt="{{ $product->image }}"
                    class="object-cover w-full h-full hover:scale-105 transition-transform duration-300">
            </div>

            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-1 truncate">
                    {{ $product->name }}
                </h2>

                <p class="text-sm text-gray-500 mb-1">
                    <span class="font-medium text-gray-700">Stok:</span>
                    {{ $product->stock }}
                </p>

                <p class="text-sm text-gray-500 mb-3">
                    <span class="font-medium text-gray-700">Kategori:</span>{{ $product->category->name }}
                </p>

                <a href="{{ route('product.detail', $product->id) }}"
                    class="inline-block w-full text-center bg-blue-600 text-white font-medium py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    Detail
                </a>
            </div>
        </li>
    @endforeach
</ul>

<!-- pagination -->
<div class="mt-10 flex justify-center">
    <nav class="inline-flex items-center space-x-1">
        {{-- Tombol Sebelumnya --}}
        @if ($products->onFirstPage())
            <span class="px-3 py-2 text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed select-none">‹</span>
        @else
            <a href="{{ $products->previousPageUrl() }}"
                class="px-3 py-2 bg-gray-600 text-white rounded-lg hover:bg-blue-700 transition cursor-pointer">
                ‹
            </a>
        @endif

        {{-- Nomor Halaman --}}
        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
            @if ($page == $products->currentPage())
                <span class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow cursor-pointer">{{ $page }}</span>
            @else
                <a href="{{ $url }}"
                    class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-blue-50 transition">
                    {{ $page }}
                </a>
            @endif
        @endforeach

        {{-- Tombol Berikutnya --}}
        @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}"
                class="px-3 py-2 bg-gray-600 text-white rounded-lg hover:bg-blue-700 transition">
                ›
            </a>
        @else
            <span class="px-3 py-2 text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed select-none">›</span>
        @endif
    </nav>
</div>

