<nav class="shadow-xl">
    <div class="flex items-center justify-between max-w-screen-xl mx-auto h-[70px] px-10">
        <div>
            <h1 class="text-2xl font-bold"><a href="/">MyShop</a></h1>
        </div>
        <div>
            <ul class="flex gap-5">
                <li class="font-semibold hover:text-blue-600"><a href="/">Home</a></li>
                <li class="font-semibold hover:text-blue-600"><a href="/products">Products</a></li>
                <li class="font-semibold hover:text-blue-600"><a href="/cart">Cart</a></li>
                <li class="font-semibold hover:text-blue-600"><a href="#">Admin</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif

            </ul>

        </div>
    </div>
</nav>
