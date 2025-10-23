<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <main>
        <div
            class="h-[500px] w-full bg-[url('https://raw.githubusercontent.com/irfan-fauzi/ecommerce-laravel-eduwork/refs/heads/main/public/img/c2.png')] bg-no-repeat bg-cover flex items-center justify-start">
            <div class="max-w-screen-xl w-full mx-auto">
                <header>
                    <h1 class="text-5xl font-bold mb-3 text-gray-100 max-w-[700px] leading-tight">Discover Your Next
                        Favorite Products</h1>
                    <h2 class="text-lg mb-10 text-gray-50 max-w-[550px]">
                        Shop the latest trend fashion at unbeatable prices. Quality products delivered to your door.
                    </h2>
                    <a href="/products"
                        class="bg-blue-500 text-white px-5 py-2 rounded text-xl hover:bg-blue-600 transition-colors">
                        Shop now
                    </a>
                </header>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto mt-10 mb-10">
            <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <li class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden">
                        <div class="relative w-full h-56 bg-gray-100">
                            <img src="{{ $product->image }}"
                                alt="{{ $product->image }}"
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
                                <span class="font-medium text-gray-700">Kategori:</span>{{ $product->category }}</p>

                            <a href="/detail/{{ $product->id }}"
                                class="inline-block w-full text-center bg-blue-600 text-white font-medium py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Detail
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</x-layout>
