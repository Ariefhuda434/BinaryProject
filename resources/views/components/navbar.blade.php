    <nav x-data="{
        isOpen: false,
        isBuka: false,
        showNavbar: true,
        isBukaProfile: false,
        isClose: false,
        isKecil: false,
        isProfile: false,
        isProfil: false,
        lastScrollY: window.scrollY
    }" 
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
        : 'fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out transform -translate-y-full opacity-0'">

        <div class="{{ Request::is('beranda') ? 'md:hidden flex w-screen pl-10  justify-between items-center p-4 backdrop-blur' : 'md:hidden flex w-full pl-10  justify-between items-center p-4 bg-[#57674c]'  }}" >
            <div class="flex items-center">
                @if(Request::is('/'))
                <img class="h-10 mr-2" src="{{ asset('build/images/logo.png') }}" alt="Logo">
                @else
                <img class="h-10 mr-2" src="{{ asset('build/images/logoPutih.png') }}" alt="Logo">
                @endif
                <h1 class="text-xl font-black text-white">BINARY WASTE</h1>
            </div>
            <button @click="isKecil = !isKecil" class="text-white mr-2 transform-all duration-500 ease-in-out">
                <span class="block w-7 h-1 rounded-2xl bg-white mb-1"></span>
                <span class="block w-7 h-1 rounded-2xl bg-white mb-1"></span>
                <span class="block w-7 h-1 rounded-2xl bg-white"></span>
            </button>
        </div>
        <!-- Mobile Menu (Dropdown) -->
        <div x-show="isKecil" x-transition
        class="md:hidden bg-gray-200 p-4 w-40 rounded-lg absolute right-0 transform-all duration-500 ease-in-out mr-5 space-y-4 z-50">
        <ul class="flex flex-col space-y-4">
    <li>
    <a href="/" class="relative pl-2 {{ Request::is('beranda') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
        Beranda
    </a>
</li>
    <li>
    <a href="/tentang" class="relative pl-2 {{ Request::is('tentang') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
        Tentang
    </a>
</li>
    <li>
    <a href="/gerakans" class="relative pl-2 {{ Request::is('gerakans') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
        Gerakan
    </a>
</li>
    <li>
    <a href="/report" class="relative pl-2 {{ Request::is('report') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
        Laporan
    </a>
</li>
    <li>
    <a href="/faq" class="relative pl-2 {{ Request::is('faq') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
        Faq
    </a>
</li>
</ul>
            <div class="pt-4 border-t border-gray-400">
                <button @click="isOpen = !isOpen" class="flex items-center font-black text-[#ccc14e]">
                    @auth
                    {{ Auth::user()->name }}
                    @else
                    Masuk
                    @endauth
                    <img src="{{ asset('build/images/iconexpands.png') }}" 
                        class="h-5 ml-2 transition-transform duration-300"
                        :class="{'rotate-180': isOpen}">
                </button>
                
                <div x-show="isOpen" x-transition class="mt-2 space-y-2 pl-4">
                    @auth   
                    <button onclick="navbarKore('btnProfil')" id="btnProfil" type="submit" class="block text-gray-700 hover:bg-gray-200">Profile</button>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="block text-gray-700 hover:bg-gray-200">Logout</button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="block text-gray-700 hover:bg-gray-200">Login</a>
                    <a href="{{ route('showregister') }}" class="block text-gray-700 hover:bg-gray-200">Register</a>
                    @endauth
                </div>
            </div>
        </div>

        <div class="{{ Request::is('/') ? 'hidden md:flex md:relative p-2 items-center justify-between w-full backdrop-blur-sm' : 'hidden md:flex md:relative p-2 items-center justify-between w-full bg-[#57674c]'   }}">
        <div class="flex items-center">
            @if (Request::is('/')) 
            <img class="h-13 mr-4" src="{{ asset('build/images/logo.png') }}" alt="Logo">
            @else
            <img class="h-13 mr-4" src="{{ asset('build/images/logoputih.png') }}" alt="Logo Putih">
            @endif
        <h1 class="text-xl font-black text-white">BINARY WASTE</h1>
    </div>


            <div class="flex items-center space-x-10">
                <ul class="flex space-x-10">
                    <li>
                        <a href="/" class="{{ Request::is('/') ? 'text-[#ccc14e] font-black pb-[1.05rem] text-xl  border-b-4 border-[#ccc14e]' : 'relative text-white font-normal pb-[0.9rem]  text-xl after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:ease-in-out after:scale-x-0 after:transition-transform after:duration-900  hover:after:scale-x-100' }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="/tentang" class="{{ Request::is('tentang') ? 'text-[#ccc14e] font-black pb-[1.05rem] text-xl border-b-4 border-[#ccc14e]' : 'relative text-white font-normal text-xl pb-[0.9rem]   after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:scale-x-0 after:transition-transform after:duration-900  hover:after:scale-x-100' }}">
                            Tentang
                        </a>
                    </li>
                    <li>
                        <a href="/gerakans" class="{{ Request::is('gerakans') ? 'text-[#ccc14e] font-black pb-[1.05rem] text-xl border-b-4 border-[#ccc14e]' : 'relative text-xl text-white font-normal pb-[0.9rem]   after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:scale-x-0 after:transition-transform after:duration-900 hover:after:scale-x-100' }}">
                            Gerakan
                        </a>
                    </li>
                    <li>
                        <a href="/report" class="{{ Request::is('report') ? 'text-[#ccc14e] font-black pb-[1.05rem]  text-xl border-b-4 border-[#ccc14e]' : 'relative text-xl text-white font-normal pb-[0.9rem]   after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:scale-x-0 after:transition-transform after:duration-900 hover:after:scale-x-100' }}">
                            Laporan
                        </a>
                    </li>
                    <li>
                        <a href="/faq" class="{{ Request::is('faq') ? 'text-[#ccc14e] font-black pb-[1.05rem]  text-xl border-b-4 border-[#ccc14e]' : 'relative text-white text-xl font-normal pb-[0.9rem]   after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:scale-x-0 after:transition-transform after:duration-900 hover:after:scale-x-100' }}">
                            FAQ
                        </a>
                    </li>
                </ul>

                <div class="relative">
                    <div class="flex">
                        <button @click="isOpen = !isOpen" class="inline-flex items-center font-black text-xl text-[#ccc14e]">
                            @auth
                            {{ Auth::user()->name }}
                        @else
                        Masuk
                        @endauth
                    </button>
                    
                    <img @click="isOpen = !isOpen"
                        src="{{ asset('build/images/iconexpands.png') }}"
                        class="h-7 mt-1 ml-2 mr-4 cursor-pointer transition ease-in-out duration-500"
                        :class="{'rotate-180': isOpen}"
                        alt="expand icon"/>
                    </div>
                    
                    <div x-show="isOpen" @click.away="isOpen = false"
                        x-transition:enter="transition ease-out duration-500 transform"
                        x-transition:enter-start="opacity-0 scale-x-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300 transform"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-x-95"
                        class="absolute right-5 mt-2 w-33 text-center origin-top-right rounded-md bg-white py-1 shadow-lg z-50">
                        @auth
                        <a onclick="navbarKore('btnProfil2')" id="btnProfil2" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Profile</a>
                        <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                        @else
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Login</a>
                        <a href="{{ route('showregister') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section x-data="{isProfil: false, isClose: false}" 
        id="profile"
        class="hidden opacity-0 fixed inset-0 z-50 flex justify-center items-center py-12 min-h-screen transition-all duration-500 ease-in-out">
        
        @auth
        <div class="bg-white w-full max-w-6xl p-10 rounded-3xl shadow-2xl grid grid-cols-1 md:grid-cols-2 gap-10 relative">
            <!-- Tombol Close -->
            <button id="btnProfileClose" class="absolute top-4 left-4">
            <span class="absolute top-4 left-4 w-5 h-0.5 bg-black tra   nsform-all duration-300 ease  rotate-45 rounded"></span>
            <span class="absolute top-4 left-4 w-5 h-0.5 bg-black transform-all duration-300 ease  -rotate-45 rounded"></span>
            </button>
            
            <!-- Kolom Kiri - Info Profil -->
            <div class="flex flex-col items-center text-center md:text-left">
                <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" 
                    alt="Profile Picture"
                    class="h-40 w-40 rounded-full border-4 border-[#ccc14e] shadow-lg mb-5 object-cover" />
                
                <h2 class="text-3xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                <p class="text-sm italic text-gray-500 mb-6">{{ Auth::user()->jenis_kel }}</p>
                
                <div class="space-y-3 text-gray-700 text-sm w-full">
                    <div><span class="font-semibold">📧 Email:</span> {{ Auth::user()->email }}</div>
                    <div><span class="font-semibold">📞 Telepon:</span> {{ Auth::user()->phone }}</div>
                    <div><span class="font-semibold">📍 Alamat:</span> {{ Auth::user()->kota }}, Kec. {{ Auth::user()->kecamatan }}</div>
                    <div><span class="font-semibold">💼 Pekerjaan:</span> {{ Auth::user()->profesi }}</div>
                    <div><span class="font-semibold">🎂 Tanggal Lahir:</span> {{ Auth::user()->birth }}</div>
                </div>
                
                <button @click="isProfil = true" id="resetClick"
                    class="mt-8 w-full hover:scale-105 active:scale-95 bg-[#5e6f52] hover:bg-[#a3b398] text-white py-2 px-4 rounded-full transition-all duration-300 shadow-md">
                    🔐 Reset Password
                </button>
            </div>

            <div x-show="!isProfil" class="bg-gray-50 rounded-2xl p-6 border border-gray-200 shadow-inner">
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

            

            <div x-show="isProfil" class="bg-gray-50 rounded-2xl p-6 border border-gray-200 flex flex-col justify-center text-center shadow-inner">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">🔐 Reset Password</h3>
                
                @if(session('status'))
                    <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                        {{ session('status') }}
                    </div>
                @elseif(session('errorReset'))
                    <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
                        {{ session('errorReset') }}
                    </div>
                @endif
                
                <form action="{{ route('resetpw.request') }}" method="POST">
                    @csrf
                    <input type="email" name="email" 
                        class="p-3 w-full rounded-lg bg-gray-100 mb-3" 
                        required placeholder="Masukan Email">
                   
                        <input type="password" name="old_password" 
                        class="p-3 w-full rounded-lg bg-gray-100 mb-3" 
                        required placeholder="Masukan Password Lama">
                    
                    <input type="password" name="new_password" 
                        class="p-3 w-full rounded-lg bg-gray-100 mb-3" 
                        required placeholder="Masukan Password Baru">
                    
                    <input type="new_password_confirmation" name="password_baru_confirmation" 
                        class="p-3 w-full rounded-lg bg-gray-100 mb-3" 
                        required placeholder="Konfirmasi Password Baru">
                    
                    <button type="submit" 
                        class="p-2 w-40 rounded-full bg-[#5e6f52] text-white hover:bg-[#a3b398] transition-colors duration-300">
                        Konfirmasi
                    </button>
                </form>
                
                <p class="text-sm text-gray-500 mt-4">
                    Butuh bantuan? <a href="/faq#password" class="text-blue-600 hover:underline">Lihat FAQ</a>
                </p>
            </div>
        <div x-show="" id="resetpw" class="bg-gray-50 rounded-2xl p-6 border border-gray-200 flex flex-col justify-center text-center shadow-inner">
             <div class="w-16 h-16 rounded-full bg-[#5e6f52] text-white flex items-center justify-center mx-auto mb-6 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        
        <h2 class="text-2xl font-extrabold mb-3">Verifikasi Email Reset Password Anda</h2>
        
        @if(session('success'))
        <p class="text-sm text-green-600 mb-2 animate-pulse">{{ session('success') }}</p>
        @endif
        
        <p class="text-gray-700 leading-relaxed mb-6">
            Kami telah mengirimkan link Reset Passowrd ke:
            <span class="block font-semibold mt-1">{{ Auth::user()->email }}</span>
            <br>
            Silakan buka email Anda dan klik link verifikasi untuk Mereset Password akun Anda.
        </p>
    <form action="{{ route('resetpw.confirm') }}" method="POST">
    @csrf
    <input type="hidden" name="email" value="{{ session('dapet_email')}}">
    <button type="submit">Konfirmasi Reset Password</button>
</form>
            </div>
        </div>
        @endauth    
    </section>
   
    <script>


        function navbarKore(namaId) {
            document.getElementById(namaId).addEventListener('click', () => {
                const Profil = document.getElementById('profile');
                Profil.classList.remove('hidden');
                setTimeout(() => {
                    Profil.classList.add('opacity-100');
                    Profil.classList.remove('opacity-0');
                }, 10);
            });
            
            document.getElementById('btnProfileClose').addEventListener('click', () => {
                const Profil = document.getElementById('profile');
                Profil.classList.remove('opacity-100');
                Profil.classList.add('opacity-0');
                setTimeout(() => {
                    Profil.classList.add('hidden');
                }, 500);
            });
        }

        navbarKore('btnProfil');    
        navbarKore('btnProfil2');


    </script>

