<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <div class="max-w-screen-xl mx-auto mt-10 mb-10 px-10">
        <h1 class="text-2xl text-red-400 font-bold mb-10 underline">Our Collection in 2025: </h1>
        <x-productscards :products="$products" />
    </div>
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
    <x-footer></x-footer>
</x-layout>
