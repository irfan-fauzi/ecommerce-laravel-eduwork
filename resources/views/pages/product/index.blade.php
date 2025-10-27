<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <div class="max-w-screen-xl mx-auto mt-10 mb-10 px-10">
        <h1 class="text-2xl text-red-400 font-bold mb-10 underline">Our Collection in 2025: </h1>
        <x-productscards :products="$products" />
    </div>
    <x-footer></x-footer>
</x-layout>
