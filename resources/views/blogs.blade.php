@extends('components.layout')

@section('title', 'Gerakan')

@section('content')

    <x-header />

    <div class="mx-auto mt-20 px-6 md:px-20">

        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-5xl font-bold text-[#5e6f52]">Gerakan Peduli Sampah</h1>
            <p class="text-gray-600 mt-4">Ikuti berbagai aksi nyata demi lingkungan yang lebih baik.</p>
        </div>

        <div class=" gap-6">

            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-3 gap-6 pr-2">
                @foreach ($blogs as $blog)
                    <div
                        class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ asset('storage/' . $blog['foto']) }}" alt="Event" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <h2 class="text-xl font-semibold mb-2 text-[#5e6f52]">{{ $blog['judul'] }}</h2>
                            <p class="text-gray-600 text-sm mb-5">{{ $blog['deskripsi'] }}</p>
                            <a href="/blogs/{{ $blog['slug'] }}">
                                <button
                                    class="mt-4 bg-[#5e6f52] text-white px-4 py-2 rounded-full text-sm hover:bg-[#4a5a40] transition">
                                    Selengkapnya
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>

    </div>
    @if (auth()->check() && auth()->user()->role == 'admin')
        <div class="mt-10 pt-15 bg-white shadow-2xl  rounded-t-xl pb-10 max-w-3/4 mx-auto px-4 md:px-6">
            <h2 class="text-xl md:text-2xl font-bold text-gray-700 mb-6 text-center">Daftar Artikel</h2>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300 rounded-xl text-xs md:text-sm">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-2 md:p-3 text-center">ID Artikel</th>
                            <th class="p-2 md:p-3 text-center">Judul Artikel</th>
                            <th class="p-2 md:p-3 text-center">Update</th>
                            <th class="p-2 md:p-3 text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-300">
                            <td class="p-2 md:p-3 text-center"></td>
                            <td class="p-2 md:p-3 text-center truncate max-w-xs"></td>
                            <td class="p-2 md:p-3 text-center">
                                <button id="uwowow"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-3 py-1 rounded-full transition">
                                    Update
                                </button>
                            </td>
                            <td class="p-2 md:p-3 text-center">
                                <form action="" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white font-semibold px-3 py-1 rounded-full transition">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bg-[#5e6f52] rounded-b-xl w-full max-w-3/4 mx-auto h-16 md:h-20 relative">
            <button id="artikelbtn" class="absolute left-4 md:left-10 transform mt-3 md:mt-5">
                <div class="relative flex items-center space-x-3 group">
                    <div class="relative w-6 h-6 transform transition-transform duration-300 group-hover:rotate-90">
                        <span class="absolute top-1/2 left-0 w-6 h-1 bg-white rounded transform -translate-y-1/2"></span>
                        <span
                            class="absolute top-1/2 left-0 w-6 h-1 bg-white rounded transform -translate-y-1/2 -rotate-90"></span>
                    </div>
                    <p class="text-lg md:text-xl text-white font-bold">Tambah Artikel</p>
                </div>
            </button>
        </div>
    @endif


    @if (auth()->check() && auth()->user()->role == 'admin')
        <div id="uwakuwakmakanbakwan"
            class="bg-white rounded-lg shadow-md p-6 border-2 w-200 hidden opacity-0 mx-auto mt-10 border-dashed border-gray-300 h-fit lg:h-full ">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Tambah Artikel Baru</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="w-full lg:w-1/3 space-y-4">
                        <div>
                            <label for="judul" class="block text-gray-600 font-medium mb-1">Judul</label>
                            <input type="text" id="judul" name="judul" placeholder="Masukkan judul artikel"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                required />
                        </div>

                        <div>
                            <label for="slug" class="block text-gray-600 font-medium mb-1">Slug</label>
                            <input type="text" id="slug" name="slug" placeholder="Masukkan slug (unik)"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                required />
                        </div>

                        <div>
                            <label for="deskripsi" class="block text-gray-600 font-medium mb-1">Deskripsi</label>
                            <input type="text" id="deskripsi" name="deskripsi"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="Deskripsi"
                                required />
                        </div>

                        <div>
                            <label for="foto"
                                class="block text-gray-600  border border-gray-300 px-3 py-2  rounded-md font-medium mb-1">Foto</label>
                            <input type="file" id="foto" name="foto" accept="image/*"
                                class="w-full text-gray-600" />
                        </div>
                    </div>

                    <div class="w-full lg:w-2/3">
                        <label for="isi" class="block text-gray-600 font-medium mb-1">Isi Artikel</label>
                        <textarea id="isiBlog" name="isiBlog" rows="12" placeholder="Tulis isi artikel di sini..."
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                            required></textarea>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition duration-200">
                    Submit
                </button>
            </form>
        </div>
    @endif
    <script>
        document.getElementById('artikelbtn')?.addEventListener('click', () => {
            const itulah = document.getElementById('uwakuwakmakanbakwan');
            itulah.classList.remove('hidden');
            setTimeout(() => {
                itulah.classList.add('opacity-100');
                itulah.classList.remove('opacity-0');
                AOS.refresh();
                itulah.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 10);
        });

        document.getElementById('uwowow')?.addEventListener('click', () => {
            const headers = document.querySelectorAll('#uwakuwakmakanbakwan h2');
            const klik = document.getElementById('uwakuwakmakanbakwan');
            klik.classList.remove('hidden')
            headers.forEach(h2 => {
                h2.textContent = 'Edit Artikel ';
            });
            setTimeout(() => {
                klik.classList.add('opacity-100');
                klik.classList.remove('opacity-0');
                AOS.refresh();
                klik.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 10);
        });
    </script>

@endsection
