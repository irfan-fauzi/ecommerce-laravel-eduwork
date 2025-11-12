<x-app-layout>

    <section class="px-[5rem] bg-white py-1 pb-10">
        <form action="{{ route('dashboard-product.store') }}" method="POST" enctype="multipart/form-data"
            class="max-w-screen-lg">
            @csrf

            <!-- Upload Gambar -->
            <div class="flex items-center gap-[16px] mb-[10px] mt-5">
                <div>
                    <label class="block mb-3">Gambar Produk:</label>
                    <!-- Tombol Upload Kustom -->
                    <label for="img" class="inline-block px-3 py-2 bg-blue-700 text-white rounded-lg cursor-pointer">
                        Pilih Gambar
                    </label>
                    <input type="file" id="img" name="img" accept="image/*" onchange="previewImage(event)"
                        style="display:none;">
                    <span id="file-name" class="ml-2 text-sm text-gray-600">nama file</span>
                </div>

                <!-- Preview Gambar -->
                <div>
                    <img id="preview" src="#" alt="Preview Gambar"
                        style="display:none; width:120px; height:120px; object-fit:cover; border:1px solid #ccc; border-radius:4px;">
                </div>
            </div>
            <div class="flex gap-5">
                <div class="mb-5 flex flex-col mt-5 gap-2">
                    <label for="nama_produk">Nama Produk:</label>
                    <input type="text" id="nama_produk" name="nama_produk"
                        class="py-1 focus:outline-none focus:ring-1 focus:border-b focus:border-gray-300 text-md"
                        placeholder="Nike Air Jordan 1293" value="{{ old('nama_produk') }}">
                </div>

                <!-- Harga -->
                <div class="mb-5 flex flex-col mt-5 gap-2">
                    <label for="harga">Harga:</label>
                    <input type="number" id="harga" name="harga"
                        class="w-[400px] bg-white focus:outline-none focus:ring-1 focus:border-b focus:border-gray-300 py-1"
                        placeholder="90000" value="{{ old('harga') }}">
                </div>
            </div>
            <!-- Nama Produk -->


            <!-- Deskripsi -->
            <div class="mb-5 flex flex-col  gap-2">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="3"
                    class="px-3 py-2 bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300"
                    placeholder="Tempatkan semua barang-barang bawaan saat beraktivitas dengan Migrates Pack 15L...">{{ old('deskripsi') }}</textarea>
            </div>
            <div class="flex gap-5">
                <div class="flex flex-col gap-2">
                    <label for="stok">Stok:</label>
                    <input type="number" id="stok" name="stok"
                        class=" bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300"
                        placeholder="20" value="{{ old('stok') }}">
                </div>

                <!-- Kategori -->
                <div class="mb-5 flex flex-col gap-2">
                    <label for="category">Kategori:</label>
                    <input type="text" id="category" name="category"
                        class="px-3 py-2 bg-white focus:outline-none focus:ring-0 focus:border-b focus:border-gray-300"
                        placeholder="Shoes" value="{{ old('category') }}">
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
