    <nav x-data="{ isOpen: false, isBuka: false, showNavbar: true, lastScrollY: window.scrollY}"
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
        <div class="relative p-4 flex items-center justify-end">
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
                        <a @click="isBuka = !isBuka" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Profile</a>
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
