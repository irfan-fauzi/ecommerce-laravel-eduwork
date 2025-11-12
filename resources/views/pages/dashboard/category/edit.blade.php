<x-app-layout>
    <section class="px-[5rem] bg-white py-1 pb-10">
        <form action="{{ route('dashboard-category.update', $category->id) }}" method="POST" class="max-w-screen-lg">
            @csrf
            @method('PUT')
            <!-- Nama Kategori -->
            <div class="mb-5 flex flex-col mt-5 gap-2">
                <label for="name" class="font-medium">Nama Kategori:</label>
                <input type="text" id="name" name="name"
                    class="w-[400px] border rounded-md focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 "
                    value="{{ old('name', $category->name) }}">
            </div>

            <!-- Deskripsi -->
            <div class="mb-5 flex flex-col gap-2">
                <label for="description" class="font-medium">Deskripsi:</label>
                <textarea id="description" name="description" rows="3"
                    class="py-2 px-3 border rounded-md focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500 text-md"
                    >{{ old('description', $category->description) }}</textarea>
            </div>

            <button type="submit"
                class="bg-emerald-600 px-5 py-2 rounded-md text-white font-semibold hover:bg-emerald-700 transition">
                Simpan Kategori
            </button>
        </form>
    </section>
</x-app-layout>

<x-footer></x-footer>
