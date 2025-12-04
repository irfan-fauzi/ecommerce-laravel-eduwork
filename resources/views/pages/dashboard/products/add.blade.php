<x-app-layout>

    <section class="max-w-screen-xl mx-auto px-5 lg:px-10 mt-10 bg-white py-1 pb-10">
        <form action="{{ route('dashboard-product.store') }}" method="POST" enctype="multipart/form-data"
            class="max-w-screen-lg">
            @csrf

            <!-- Upload Gambar -->
            <div class="flex items-center gap-[16px] mb-[10px] mt-5">
                <div>
                    <label class="block mb-3">Gambar Produk:</label>
                    <!-- Tombol Upload Kustom -->
                    <label for="image" class="inline-block px-3 py-2 bg-blue-700 text-white rounded-lg cursor-pointer">
                        Pilih Gambar
                    </label>
                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)"
                        style="display:none;">
                    <span id="file-name" class="ml-2 text-sm text-gray-600">nama file</span>
                </div>

                <!-- Preview Gambar -->
                <div>
                    <img id="preview" src="#" alt="Preview Gambar"
                        style="display:none; width:120px; height:120px; object-fit:cover; border:1px solid #ccc; border-radius:4px;">
                </div>
            </div>
            <div class="flex gap-5 flex-col lg:flex-row">
                <div class=" flex flex-col gap-2">
                    <label for="name">Nama Produk:</label>
                    <input type="text" id="name" name="name"
                        class="py-1 focus:outline-none focus:ring-1 focus:border-b focus:border-gray-300 text-md lg:w-[400px]"
                        placeholder="Nike Air Jordan 1293" value="{{ old('name') }}">
                </div>

                <!-- Harga -->
                <div class="mb-5 flex flex-col gap-2">
                    <label for="price">Harga:</label>
                    <input type="number" id="price" name="price"
                        class="lg:w-[400px] bg-white focus:outline-none focus:ring-1 focus:border-b focus:border-gray-300 py-1"
                        placeholder="90000" value="{{ old('harga') }}">
                </div>
            </div>
            <!-- Nama Produk -->


            <!-- Deskripsi -->
            <div class="mb-5 flex flex-col  gap-2">
                <label for="description">Deskripsi:</label>
                <textarea id="description" name="description" rows="3"
                    class="px-3 py-2 bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300"
                    placeholder="Tempatkan semua barang-barang bawaan saat beraktivitas dengan Migrates Pack 15L...">{{ old('deskripsi') }}</textarea>
            </div>
            <div class="flex gap-5 flex-col lg:flex-row">
                <div class="flex flex-col gap-2">
                    <label for="stock">Stok:</label>
                    <input type="number" id="stock" name="stock"
                        class=" bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300"
                        placeholder="20" value="{{ old('stok') }}">
                </div>

                <!-- Kategori -->
                <div class="mb-10 flex flex-col gap-2">
                    <label for="category_id" class="font-medium">Kategori:</label>
                    <select id="category_id" name="category_id"
                        class="px-3 py-2 lg:w-[400px] border rounded-md focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>
            <!-- Stok -->


            <button type="submit" class="bg-green-600 px-4 py-2 rounded-sm text-white font-semibold">Simpan</button>
        </form>

        <script>
            function previewImage(event) {
                const file = event.target.files[0];
                const preview = document.getElementById('preview');
                const fileName = document.getElementById('file-name');

                if (file) {
                    preview.src = URL.createObjectURL(file);
                    preview.style.display = 'block';
                    fileName.textContent = file.name;
                }
            }
        </script>
    </section>
</x-app-layout>
<x-footer></x-footer>
