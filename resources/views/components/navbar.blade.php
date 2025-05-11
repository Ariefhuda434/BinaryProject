    <nav x-data="{ isOpen: false, isBuka: false,isProfil:false, showNavbar: true, lastScrollY: window.scrollY}"
    @scroll.window="
        if (window.scrollY - lastScrollY > 90) {
            showNavbar = false;
            lastScrollY = window.scrollY;
        } else if (lastScrollY - window.scrollY > 30) {
            showNavbar = true;
            lastScrollY = window.scrollY;
        }
    "
    :class="showNavbar 
        ? 'fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out transform translate-y-0 opacity-100' 
        : 'fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out transform -translate-y-full opacity-0'"
        
    >
    {{--  backdrop-blur-xl bg-white/10 --}}
        <!-- Background blur -->
        <div class="absolute inset-0"></div>

        <!-- Konten navbar -->
        <div class="relative p-4 flex items-center justify-between">
            <div class="flex items-center -mb-3">
           <img class="h-13 mr-4 " src="{{ asset('build/images/logo.png') }}" alt="Logo">
           <div>
              <h1 class="text-xl italic font-black text-white">BINARY WASTE</h1>
              <p class="text-[0.5rem] italic text-white">Digital Solution for a Zero-Waste World!</p>
           </div>
         </div>
            {{-- <div class="w-32">
                <img src="{{ asset('build/images/logo.png') }}" alt="Logo" class="h-13" />
            </div> --}}

            <div class="flex items-center space-x-10 text-2xl font-sans">
                <ul class="flex space-x-10">
                    <li>
                         <a href="/"  class="{{ Request::is('/')  ? 'text-[#ccc14e] font-black pb-3 border-b-4 border-[#ccc14e]' : 'relative text-white font-normal pb-4 after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[5px] after:bg-[#ccc14e] after:origin-center after:scale-x-0  after:transition-transform after:duration-500 hover:after:scale-x-100' }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="/tentang"  class="{{ Request::is('tentang')  ? 'text-[#ccc14e] font-black pb-3 border-b-4 border-[#ccc14e]' : 'relative text-white font-normal pb-4 after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[5px] after:bg-[#ccc14e] after:origin-center after:scale-x-0  after:transition-transform after:duration-500 hover:after:scale-x-100' }}">
                            Tentang
                        </a>
                    </li>
                    <li>
                        <a href="/blog"  class="{{ Request::is('blog')  ? 'text-[#ccc14e] font-black pb-3 border-b-4 border-[#ccc14e]' : 'relative text-white font-normal pb-4 after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[5px] after:bg-[#ccc14e] after:origin-center after:scale-x-0  after:transition-transform after:duration-500 hover:after:scale-x-100' }}">
                            Blog
                        </a>
                    </li>
                    <li>
                      <a href="/report"  class="{{ Request::is('report')  ? 'text-[#ccc14e] font-black pb-3 border-b-4 border-[#ccc14e]' : 'relative text-white font-normal pb-4 after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[5px] after:bg-[#ccc14e] after:origin-center after:scale-x-0  after:transition-transform after:duration-500 hover:after:scale-x-100' }}">
                            perpustakaan
                        </a>
                    </li>
                    <li>
                       <a href="/faq"  class="{{ Request::is('faq')  ? 'text-[#ccc14e] font-black pb-3 border-b-4 border-[#ccc14e]' : 'relative text-white font-normal pb-4 after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[5px] after:bg-[#ccc14e] after:origin-center after:scale-x-0  after:transition-transform after:duration-500 hover:after:scale-x-100' }}">
                            FAQ
                        </a>
                    </li>
                </ul>
                
                <button @click="isOpen = !isOpen" class="inline-flex items-center font-black text-[#ccc14e]">
                    @auth
                        {{ Auth::user()->name }}
                    @else
                        Masuk
                    @endauth
                </button>
        
                <!-- Ikon Expand -->
                <img
                    @click="isOpen = !isOpen"
                    src="{{ asset('build/images/iconexpands.png') }}"
                    class="h-7 mt-1 -ml-7 cursor-pointer transition ease-in-out duration-500"
                    :class="{'rotate-180': isOpen}"
                    alt="expand icon"
                />
            
                <!-- Dropdown -->
                <div
                    x-show="isOpen"
                    @mouseover="isHovered = true"
                    @click="isHovered = false; isOpen = false"
                    x-transition:enter="transition ease-out duration-500 transform"
                    x-transition:enter-start="opacity-0 scale-x-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-x-95"
                    class="absolute right-15 mt-40 w-35 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 z-50"
                >
                    @auth
                        <a @click="isBuka = !isBuka" id="btnProfil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Profile</a>
                        <form action="{{ route('logout') }}" method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    @else
                        <a href="/auth/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Login</a>
                        <a href="/auth/register" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Register</a>
                    @endauth
                </div>
            </div>
        </div>        
    </nav>
    <section x-show ="isProfil"
    id="profil"  class=" flex hidden fixed inset-0 z-50 opacity-0 justify-center items-center py-12 min-h-screen transition-all duration-500 ease-in-out">
        <div class="bg-white w-full max-w-6xl p-10 rounded-3xl shadow-2xl grid grid-cols-1 md:grid-cols-2 gap-10 ">
            <!-- KIRI: Profil -->
            
            <div class="flex flex-col items-center text-center md:text-left">
                <button  @mouseover="isProfil = !isProfil" {{-- belum bisa --}}
                id="btnProfileClose"><img src="{{ asset('build/images/no.png') }}" alt="" srcset="" class="mr-120 transform-all duration-300 ease-in-out":class="{'rotate-180': isProfil}"></button>
       <img src="{{ asset('build/images/awn.jpg') }}" alt="Profile Picture"
       class="h-40 w-40 rounded-full border-4 border-green-500 shadow-lg mb-5 object-cover" />

       <h2 class="text-3xl font-bold text-gray-800"> {{ Auth::user()->name }}</h2>
       <p class="text-sm italic text-gray-500 mb-6"> {{ Auth::user()->jenis_kel }}</p>
 
       <div class="space-y-3 text-gray-700 text-sm w-full">
         <div><span class="font-semibold">📧 Email:</span>  {{ Auth::user()->email }}</div>
         <div><span class="font-semibold">📞 Telepon:</span>  {{ Auth::user()->phone }}</div>
         <div><span class="font-semibold">📍 Alamat:</span>  {{ Auth::user()->kota }}, Kec. {{ Auth::user()->kecamatan }}</div>
         <div><span class="font-semibold">💼 Pekerjaan:</span>  {{ Auth::user()->profesi }}</div>
         <div><span class="font-semibold">🎂 Tanggal Lahir:</span>  {{ Auth::user()->birth }}</div>
       </div>
 
       <button
         class="mt-8 w-full hover:scale-105 active:scale-95 bg-[#5e6f52] hover:bg-[#a3b398] focus:ring-2 focus:bg-[a3b398] text-white py-2 px-4 rounded-full transition-all duration-300 shadow-md">
         🔐 Reset Password
       </button>
     </div>
 
     <!-- KANAN: Riwayat Aktivitas -->
     <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 shadow-inner">
       <h3 class="text-2xl font-semibold text-gray-800 mb-4">📜 Riwayat Aktivitas</h3>
 
       <ul class="space-y-4 text-sm text-gray-700">
         <li class="flex items-start gap-3">
           <div class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">18 Mei 2022</div>
           <div>
             <p class="font-medium">Aksi Bersih Pantai</p>
             <p class="text-gray-500 text-xs">Membersihkan area pantai bersama komunitas</p>
           </div>
         </li>
         <li class="flex items-start gap-3">
           <div class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">12 Jan 2023</div>
           <div>
             <p class="font-medium">Penanaman 100 Pohon</p>
             <p class="text-gray-500 text-xs">Kontribusi dalam reboisasi wilayah kota</p>
           </div>
         </li>
       </ul>
     </div>
 
   </div>
 </section>

 <script>
    AOS.init();
    document.getElementById('btnProfil').addEventListener('click',()=>{
        const Profil = document.getElementById('profil');
        Profil.classList.remove('hidden');
        setTimeout(() => {
            Profil.classList.add('opacity-100');
            Profil.classList.remove('opacity-0');
            AOS.refresh();
            Profil.scrollIntoView({behavior:'smooth'});
    }, 10);
   });
   document.getElementById('btnProfileClose').addEventListener('click',()=>{
      const Profil = document.getElementById('profil');
      Profil.classList.remove('opacity-100');
      Profil.classList.add('opacity-0');
      setTimeout(() => {
            Profil.classList.add('hidden');
            AOS.refresh();
            Profil.scrollIntoView({behavior:'smooth'});
    }, 500);
   })
 </script>