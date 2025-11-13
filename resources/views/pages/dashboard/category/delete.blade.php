<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Konfirmasi Hapus Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Yakin ingin menghapus category ini?</h3>

                <div class="mb-4">
                    <label class="font-semibold">Nama:</label>
                    <p>{{ $category->name }}</p>
                </div>

                <div class="mb-4">
                    <label class="font-semibold">Deskripsi:</label>
                    <p>{{ $category->description ?? '-' }}</p>
                </div>

                <form action="{{ route('dashboard-category.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="flex gap-4">
                        <a href="{{ route('dashboard-category.index') }}" class="px-4 py-2 bg-gray-300 rounded">Batal</a>
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded">
                            Hapus
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
