<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <main class="p-6">
                    <div class="max-w-7xl mx-auto">

                        <!-- Tabs -->
                        <div class="bg-white shadow rounded p-4">
                            <div class="border-b mb-4">
                                <nav class="flex -mb-px">
                                    <button class="py-3 px-4 text-sm font-medium active-tab"
                                        data-tab="kategori">Kategori</button>
                                </nav>
                            </div>

                            <section id="tab-kategori" class="tab-content">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold">Daftar Kategori</h3>
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('dashboard-category.create') }}"
                                            class="py-2 px-3 rounded bg-emerald-500 text-white text-sm hover:bg-emerald-700">
                                            Tambah Kategori
                                        </a>
                                    </div>
                                </div>

                                <!-- categories table -->
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-slate-200">
                                        <thead class="bg-slate-50">
                                            <tr>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">#
                                                </th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">Nama
                                                    Kategori</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">
                                                    Deskripsi</th>
                                                <th class="px-4 py-2 text-left text-sm font-medium text-slate-600">
                                                    Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-slate-100">
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td class="px-4 py-3 text-sm">{{ $loop->iteration }}</td>
                                                    <td class="px-4 py-3 text-sm">{{ $category->name }}</td>
                                                    <td class="px-4 py-3 text-sm">{{ $category->description }}</td>
                                                    <td class="px-4 py-3 text-sm">
                                                        <div class="flex gap-2">
                                                            <a href="{{ route('dashboard-category.edit', $category->id) }}"
                                                                class="px-2 py-1 text-xs rounded border bg-blue-600 text-white">Edit</a>
                                                            <a href="{{ route('dashboard-category.delete', $category->id) }}"
                                                                class="px-2 py-1 text-xs rounded border bg-red-500 text-white">Hapus</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
