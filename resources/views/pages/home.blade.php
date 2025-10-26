<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>
    <main>
       <x-hero></x-hero>
        <div class="max-w-screen-xl mx-auto mt-10 mb-10 px-10">
            <h2 class="font-bold text-2xl mb-10">New Arrival :</h2>
            <x-productscards :products="$products" />
        </div>
    </main>
    <x-footer></x-footer>
</x-layout>
