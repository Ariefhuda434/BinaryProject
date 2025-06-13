@extends('components.layout')

@section('title', 'Gerakan Peduli Lingkungan')

@section('content')

<div class="flex flex-col items-center w- mx-auto min-h-screen px-6 md:px-20  py-16 bg-white">

    <h1 class="text-5xl md:text-6xl font-extrabold font-sans text-gray-900 mb-6 mt-5 text-center">
        Get Involved with Binary Waste
    </h1>

    <p class="max-w-3xl text-center text-gray-600 text-lg md:text-xl mb-12 leading-relaxed">
        Ikuti berbagai aksi nyata demi lingkungan yang lebih baik.
    </p>

      <div class="max-w-7xl w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach ($gerakans as $gerakan )
                
            <article class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 transform hover:scale-105">
                <img 
                    src="{{ asset('storage/' . $gerakan['foto']) }}" 
                    alt="Event Image" 
                    class="w-full h-48 object-cover rounded-t-2xl"
                >
                <div class="p-5 space-y-3">
                    <h3 class="text-xl font-bold text-gray-800">{{ $gerakan['judul'] }}</h3>

                    <div class="flex items-center text-sm text-gray-600 gap-2">
                        <img src="{{ asset('build/images/icondate.png')}}" alt="Tanggal" class="h-4">
                        <span>{{ $gerakan['tanggal'] }}</span>
                    </div>

                    <div class="flex items-center text-sm text-gray-600 gap-2">
                        <img src="{{ asset('build/images/icontime.png')}}" alt="Jam" class="h-4">
                        <span>{{ $gerakan['periode'] }}</span>
                    </div>

                    <div class="flex items-center text-sm text-gray-600 gap-2">
                        <img src="{{ asset('build/images/iconlocation.png')}}" alt="Lokasi" class="h-4">
                        <span>{{ $gerakan['lokasi'] }}</span>
                    </div>

                    <div class="flex items-center justify-between pt-3">
                        <a href="{{ route('gerakan.show', $gerakan['slug']) }}">

                            <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-lg">
                                Ikut
                            </button>
                        </a>
                        
                        <a href="#" class="hover:opacity-80">
                            <img src="{{ asset('build/images/iconshare.png') }}" alt="Bagikan" class="h-5">
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>

</div>
@if (auth()->check()&& auth()->user()->role =='admin')
<div class="mt-10 pt-15 bg-white shadow-2xl rounded-t-xl pb-10 max-w-3/4 mx-auto px-4 md:px-6">
            <h2 class="text-xl md:text-2xl font-bold text-gray-700 mb-6 text-center">Daftar Gerakan</h2>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300 rounded-xl text-xs md:text-sm">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-2 md:p-3 text-center">ID Gerakan</th>
                            <th class="p-2 md:p-3 text-center">Judul Gerakan</th>
                            <th class="p-2 md:p-3 text-center">Status</th>
                            <th class="p-2 md:p-3 text-center">Update</th>
                            <th class="p-2 md:p-3 text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gerakans as $gerakan )
                            <tr class="border-b border-gray-300">
                                <td class="p-2 md:p-3 text-center">{{ $gerakan['id'] }}</td>
                                <td class="p-2 md:p-3 text-center truncate max-w-xs">{{ $gerakan['judul'] }}</td>
                                <td class="p-2 md:p-3 text-center truncate max-w-xs">{{ $gerakan['status'] }}</td>
                                <td class="p-2 md:p-3 text-center">
                                    <button data-gerakan='@json($gerakan)' class="update-btn bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-3 py-1 rounded-full transition">
                                        Update
                                    </button>
                                </td>
                                <td class="p-2 md:p-3 text-center">
                                    <form action="{{ route('gerakan.destroy', $gerakan['id'] ) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-3 py-1 rounded-full transition">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-[#5e6f52] rounded-b-xl w-full max-w-3/4 mx-auto h-16 md:h-20 relative">
            <button id="gerakanbtn" class="absolute left-4 md:left-10 transform mt-3 md:mt-5">
                <div class="relative flex items-center space-x-3 group">
                    <div class="relative w-6 h-6 transform transition-transform duration-300 group-hover:rotate-90">
                        <span class="absolute top-1/2 left-0 w-6 h-1 bg-white rounded transform -translate-y-1/2"></span>
                        <span class="absolute top-1/2 left-0 w-6 h-1 bg-white rounded transform -translate-y-1/2 -rotate-90"></span>
                    </div>
                    <p class="text-lg md:text-xl text-white font-bold">Tambah Artikel</p>
                </div>
            </button>
        </div>

    <div id="form-section" class="bg-white mt-20 rounded-lg shadow-md hidden opacity-0 p-6 border-2 w-200 mx-auto border-dashed border-gray-300 h0fit lg:h-full">
        <h2 id="header" class="text-2xl font-semibold mb-4 text-gray-700">Tambah Event Baru</h2>
           @if(session('success'))
                <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        <form id="form-gerakan" action="{{ route('gerakans.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" name="_method" id="methodField" value="POST">

            <div>
                <label for="judul" class="block text-gray-600 font-medium mb-1">Judul</label>
                <input type="text" id="judul" name="judul" placeholder="Masukkan judul event"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
            </div>
            <div>
                <label for="slug" class="block text-gray-600 font-medium mb-1">Slug</label>
                <input type="text" id="slug" name="slug" placeholder="Masukkan slug(unik)"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
            </div>
            <div>
                <label for="deskripsi" class="block text-gray-600 font-medium mb-1">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
            </div>
            <div>
                <label for="lokasi" class="block text-gray-600 font-medium mb-1">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan lokasi"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
            </div>
            <div>
                <label for="tanggal" class="block text-gray-600 font-medium mb-1">Tanggal</label>
                <input type="datetime" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
            </div>
            <div>
                <label for="periode" class="block text-gray-600 font-medium mb-1">Periode</label>
                <input type="text" id="periode" name="periode" placeholder="Masukkan Periode (00.00 - 00.00)"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
            </div>
            <div class="mt-3" id="foto">
                <label for="foto" class="block text-gray-600  border border-gray-300 px-3 py-2  rounded-md font-medium mb-1">Foto</label>
                <input type="file" name="foto" accept="image/*"
                class="w-full text-gray-600" />
            </div>
                <button type="submit"
                id="submit"
                class="w-full mt-5 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition duration-200">
                Submit
            </button>
        </form>
    </div>
@endif
<script>
    const form = document.getElementById('form-gerakan');
    const methodField = document.getElementById('methodField');
    const judul = document.getElementById('judul');
    const slug = document.getElementById('slug');
    const deskripsi = document.getElementById('deskripsi');
    const lokasi = document.getElementById('lokasi');
    const tanggal = document.getElementById('tanggal');
    const periode = document.getElementById('periode');
    const submit = document.getElementById('submit');
    const header = document.getElementById('header');
    const formSection = document.getElementById('form-section');
    const foto = document.getElementById('foto');

    document.getElementById('gerakanbtn')?.addEventListener('click', () => {
        form.reset();
        form.setAttribute('action', '{{ route('gerakans.store') }}');
        methodField.value = "POST";

        submit.textContent = "Mulai Gerakan";
        header.textContent = "Mulai Gerakan";

        formSection.classList.remove('hidden');
        
        setTimeout(() => {
            formSection.classList.add('opacity-100');
            formSection.classList.remove('opacity-0');
            formSection.scrollIntoView({ behavior: 'smooth' });
        }, 10);
    });

    document.querySelectorAll('.update-btn').forEach(button => {
        button.addEventListener('click', () => {
            const gerakan = JSON.parse(button.dataset.gerakan); 
            form.setAttribute('action', `/gerakans/${gerakan.id}/update`);
            methodField.value = "PUT";

            judul.value = gerakan.judul;
            slug.value = gerakan.slug;
            deskripsi.value = gerakan.deskripsi;
            lokasi.value = gerakan.lokasi;
            tanggal.value = gerakan.tanggal;
            periode.value = gerakan.periode;

            submit.textContent = "Update Gerakan";
            header.textContent = "Edit Gerakan";

            
            formSection.classList.remove('hidden');
            foto.classList.add('hidden');
            setTimeout(() => {
                formSection.classList.add('opacity-100');
                formSection.classList.remove('opacity-0');
                formSection.scrollIntoView({ behavior: 'smooth' });
            }, 10);
        });
    });
</script>

@endsection
