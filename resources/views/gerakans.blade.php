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
                        <a href="/gerakans/{{  $gerakan['slug']}}">
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
    <div class="bg-white rounded-lg shadow-md p-6 border-2 w-200 mx-auto border-dashed border-gray-300 h0fit lg:h-full">
        <h2 class="text-2xl font-semibold mb-4 text-gray-700">Tambah Event Baru</h2>
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
        <form action="{{ route('gerakans.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
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
                <label for="tanggal" class="block text-gray-600 font-medium mb-1">Periode</label>
                <input type="date" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
            </div>
            <div>
                <label for="periode" class="block text-gray-600 font-medium mb-1">Periode</label>
                <input type="text" id="periode" name="periode" placeholder="Masukkan Periode (00.00 - 00.00)"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required />
            </div>
            <div class="mt-3>
                <label for="foto" class="block text-gray-600  border border-gray-300 px-3 py-2  rounded-md font-medium mb-1">Foto</label>
                <input type="file" id="foto" name="foto" accept="image/*"
                class="w-full text-gray-600" />
            </div>
                <button type="submit"
                class="w-full mt-5 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition duration-200">
                Submit
            </button>
        </form>
    </div>
@endif

<footer class="bg-[#5e6f52] pt-30 w-screen text-white mt-20">
  <div class="container mx-auto flex justify-center gap-12">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/youtube.png') }}" alt="YouTube" class="h-10">
      <p>Binary Waste Official</p>
    </div>
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/email.png') }}" alt="Email" class="h-8">
      <p>binarywaste@gmail.com</p>
    </div>
    <div class="flex items-center space-x-3">
      <img src="{{ asset('build/images/contact.png') }}" alt="Contact" class="h-8">
      <p>0822-1221-2123</p>
    </div>
  </div>
  <p class="border-t border-white mb-10 w-2/3 mx-auto text-center pt-4 pb-4 mt-8 text-sm">
    © 2025 BinaryWaste. All rights reserved.
  </p>
</footer>


@endsection
