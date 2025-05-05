@extends('components.layout')

@section('title', 'blog')

@section('content')
    
<div class="flex flex-col items-center w-full mx-auto h-full px-4 ">      
    <p class="text-xl mt-5 h-7 text-gray-500">Let's See About Binary Waste</p>

    <div class="flex items-center mb-4 mt-4 mr-6">
        <img class="h-24 mr-5 " src="{{ asset('build/images/logo.png') }}" alt="Logo">
        <div>
            <h1 class="text-6xl font-black">BINARY WASTE</h1>
            <p class="text-2xl font-bold">Digital Solution for a Zero-Waste World!</p>
        </div>
    </div>
    <div class="max-w-[1000px] mx-auto px-4 py-8 ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <article class="bg-white shadow-lg rounded-xl p-6 transition-transform hover:scale-105 hover:shadow-xl">
                <img src="{{ asset('build/images/awn.jpg') }}" class="w-full h-56 object-cover rounded-md mb-4" alt="Event Image">
                <h3 class="text-2xl font-bold mb-2 text-green-800">Judul Event</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Ini kegiatan membersihkan yang dilakukan di sini dan sekian macam itu
                    dan anu siapa yah gitu saya ini.
                </p>
                <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Read
                </button>
            </article>

            <article class="bg-white shadow-lg rounded-xl p-6 transition-transform hover:scale-105 hover:shadow-xl">
                <img src="{{ asset('build/images/awn.jpg') }}" class="w-full h-56 object-cover rounded-md mb-4" alt="Event Image">
                <h3 class="text-2xl font-bold mb-2 text-green-800">Judul Event</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Ini kegiatan membersihkan yang dilakukan di sini dan sekian macam itu
                    dan anu siapa yah gitu saya ini.
                </p>
                <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Read
                </button>
            </article>

            <div class=" text-center px-30 pt-5 col-span-2 border-t-1 border-b-1 border-gray-300 relative my-2 pb-4 justify-content-center">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('build/images/tokoh1.jpg') }}" class="h-40 w-40 rounded-full object-cover mr-6" alt="Mahatma Gandhi">
                    <p class="text-2xl italic text-gray-700 font-medium leading-relaxed max-w-3xl mx-auto">
                        "Be the change that you wish to see in the world."<br>
                        <span class="text-sm text-gray-500 -pb-5"> - Mahatma Gandhi</span>
                    </p>
                </div>
            </div>

            <article class="bg-white shadow-lg rounded-xl p-6 transition-transform hover:scale-105 hover:shadow-xl">
                <img src="{{ asset('build/images/awn.jpg') }}" class="w-full h-56 object-cover rounded-md mb-4" alt="Event Image">
                <h3 class="text-2xl font-bold mb-2 text-green-800">Judul Event</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Ini kegiatan membersihkan yang dilakukan di sini dan sekian macam itu
                    dan anu siapa yah gitu saya ini.
                </p>
                <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Read
                </button>
            </article>
    
            <article class="bg-white shadow-lg rounded-xl p-6 transition-transform hover:scale-105 hover:shadow-xl">
                <img src="{{ asset('build/images/awn.jpg') }}" class="w-full h-56 object-cover rounded-md mb-4" alt="Event Image">
                <h3 class="text-2xl font-bold mb-2 text-green-800">Judul Event</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Ini kegiatan membersihkan yang dilakukan di sini dan sekian macam itu
                    dan anu siapa yah gitu saya ini.
                </p>
                <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Read
                </button>
            </article>
        </div>
        
    </div>
    <footer class="mt-70 p-30 bg-[#5e6f52] w-screen flex items-center justify-center py-20">
        <p class="text-white border-t border-white pt-4 px-6">© 2025 BinaryWaste. All rights reserved.</p>
     </footer>
@endsection
