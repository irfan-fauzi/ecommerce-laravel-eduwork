<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>

    <main class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-8 text-center">🛍️ Keranjang Belanja</h1>

        @php
            // Dummy data cart
            $cartItems = [
                (object)[
                    'product' => (object)[
                        'name' => 'Kaos Polos Vintage',
                        'category' => 'Fashion',
                        'price' => 95000,
                        'image' => 'https://via.placeholder.com/150',
                    ],
                    'quantity' => 2,
                ],
                (object)[
                    'product' => (object)[
                        'name' => 'Sepatu Sneakers Putih',
                        'category' => 'Sepatu',
                        'price' => 250000,
                        'image' => 'https://via.placeholder.com/150',
                    ],
                    'quantity' => 1,
                ],
                (object)[
                    'product' => (object)[
                        'name' => 'Jam Tangan Kulit Coklat',
                        'category' => 'Aksesoris',
                        'price' => 180000,
                        'image' => 'https://via.placeholder.com/150',
                    ],
                    'quantity' => 1,
                ],
            ];
        @endphp

        @if(count($cartItems) > 0)
            <div class="bg-white p-6 rounded-2xl shadow-md">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-100 text-left text-gray-700">
                                <th class="py-3 px-4 rounded-l-lg">Produk</th>
                                <th class="py-3 px-4">Harga</th>
                                <th class="py-3 px-4">Jumlah</th>
                                <th class="py-3 px-4 text-right rounded-r-lg">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr class="border-b hover:bg-gray-50 transition">
                                    <td class="py-4 px-4 flex items-center gap-4">
                                        <img src="{{ $item->product->image }}" 
                                             alt="{{ $item->product->name }}" 
                                             class="w-16 h-16 object-cover rounded-lg shadow-sm">
                                        <div>
                                            <p class="font-semibold text-gray-800">{{ $item->product->name }}</p>
                                            <p class="text-sm text-gray-500">{{ $item->product->category }}</p>
                                        </div>
                                    </td>

                                    <td class="py-4 px-4 text-gray-700">
                                        Rp {{ number_format($item->product->price, 0, ',', '.') }}
                                    </td>

                                    <td class="py-4 px-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">-</button>
                                            <span class="font-medium text-gray-700">{{ $item->quantity }}</span>
                                            <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">+</button>
                                        </div>
                                    </td>

                                    <td class="py-4 px-4 text-right font-semibold text-gray-800">
                                        Rp {{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-between items-center mt-6">
                    <a href="#"
                       class="text-gray-700 border border-gray-400 px-5 py-3 rounded-lg hover:bg-gray-100 transition">
                       ← Lanjut Belanja
                    </a>

                    <div class="text-right">
                        @php
                            $total = collect($cartItems)->sum(fn($item) => $item->product->price * $item->quantity);
                        @endphp
                        <p class="text-lg font-semibold text-gray-700 mb-3">
                            Total Belanja: 
                            <span class="text-blue-600">
                                Rp {{ number_format($total, 0, ',', '.') }}
                            </span>
                        </p>
                        <button
                            class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center bg-white p-10 rounded-2xl shadow-md">
                <p class="text-gray-600 text-lg mb-4">Keranjang kamu masih kosong 🛒</p>
                <a href="#"
                   class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                   Mulai Belanja
                </a>
            </div>
        @endif
    </main>

    <x-footer></x-footer>
</x-layout>
