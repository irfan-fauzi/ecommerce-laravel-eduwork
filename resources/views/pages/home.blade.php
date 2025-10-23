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
        <div>
          <ul>
          
          </ul>
        </div>
    </main>
</x-layout>
