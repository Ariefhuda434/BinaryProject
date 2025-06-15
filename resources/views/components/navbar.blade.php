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
            ?
            'fixed top-0 left-0 w-screen z-50 transition-all duration-500 ease-in-out transform translate-y-0 opacity-100' :
            'fixed top-0 left-0 w-screen z-50 transition-all duration-500 ease-in-out transform -translate-y-full opacity-0'">

        <div
            class="{{ Request::is('beranda') ? 'md:hidden flex w-screen pl-10  justify-between items-center p-4 backdrop-blur' : 'md:hidden flex w-full pl-10  justify-between items-center p-4 bg-[#57674c]' }}">
            <div class="flex items-center">
                @if (Request::is('/'))
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
        <div x-show="isKecil" x-transition
            class="md:hidden bg-gray-200 p-4 w-40 rounded-lg absolute right-0 transform-all duration-500 ease-in-out mr-5 space-y-4 z-50">
            <ul class="flex flex-col space-y-4">
                <li>
                    <a href="/"
                        class="relative pl-2 {{ Request::is('beranda') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="/tentang"
                        class="relative pl-2 {{ Request::is('tentang') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
                        Tentang
                    </a>
                </li>
                <li>
                    <a href="/gerakans"
                        class="relative pl-2 {{ Request::is('gerakans') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
                        Gerakan
                    </a>
                </li>
                <li>
                    <a href="/report"
                        class="relative pl-2 {{ Request::is('report') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
                        Laporan
                    </a>
                </li>
                <li>
                    <a href="/faq"
                        class="relative pl-2 {{ Request::is('faq') ? 'text-[#ccc14e] border-[#ccc14e] border-l-4 font-black' : 'before:content-[""] before:absolute before:left-0 before:top-0 before:h-full before:w-[4px] before:bg-[#ccc14e] before:scale-y-0 before:origin-top hover:before:scale-y-100 before:transition before:duration-700' }}">
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
                        class="h-5 ml-2 transition-transform duration-300" :class="{ 'rotate-180': isOpen }">
                </button>

                <div x-show="isOpen" x-transition class="mt-2 space-y-2 pl-4">
                    @auth
                        <button onclick="navbarKore('btnProfil')" id="btnProfil" type="submit"
                            class="block text-gray-700 hover:bg-gray-200">Profile</button>
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

        <div
            class="{{ Request::is('/') ? 'hidden md:flex md:relative p-2 items-center justify-between w-full backdrop-blur-sm' : 'hidden md:flex md:relative p-2 items-center justify-between w-full bg-[#57674c]' }}">
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
                        @if (Request::is('blogs'))
                            <a href="/"
                                class="text-[#ccc14e] font-black pb-[1.05rem] text-xl  border-b-4 border-[#ccc14e]">
                                Blogs
                            </a>
                        @elseif (Request::is('bloguk'))
                            <a href="blogs"
                                class="text-[#ccc14e] font-black pb-[1.05rem] text-xl  border-b-4 border-[#ccc14e]">
                                Blog
                            </a>
                        @else
                            <a href="/"
                                class="{{ Request::is('/') ? 'text-[#ccc14e] font-black pb-[1.05rem] text-xl  border-b-4 border-[#ccc14e]' : 'relative text-white font-normal pb-[0.9rem]  text-xl after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:ease-in-out after:scale-x-0 after:transition-transform after:duration-900  hover:after:scale-x-100' }}">
                                Beranda
                            </a>
                        @endif

                    </li>
                    <li>
                        <a href="/tentang"
                            class="{{ Request::is('tentang') ? 'text-[#ccc14e] font-black pb-[1.05rem] text-xl border-b-4 border-[#ccc14e]' : 'relative text-white font-normal text-xl pb-[0.9rem]   after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:scale-x-0 after:transition-transform after:duration-900  hover:after:scale-x-100' }}">
                            Tentang
                        </a>
                    </li>
                    <li>
                        <a href="/gerakans"
                            class="{{ Request::is('gerakans') ? 'text-[#ccc14e] font-black pb-[1.05rem] text-xl border-b-4 border-[#ccc14e]' : 'relative text-xl text-white font-normal pb-[0.9rem]   after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:scale-x-0 after:transition-transform after:duration-900 hover:after:scale-x-100' }}">
                            Gerakan
                        </a>
                    </li>
                    <li>
                        <a href="/report"
                            class="{{ Request::is('report') ? 'text-[#ccc14e] font-black pb-[1.05rem]  text-xl border-b-4 border-[#ccc14e]' : 'relative text-xl text-white font-normal pb-[0.9rem]   after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:scale-x-0 after:transition-transform after:duration-900 hover:after:scale-x-100' }}">
                            Laporan
                        </a>
                    </li>
                    <li>
                        <a href="/faq"
                            class="{{ Request::is('faq') ? 'text-[#ccc14e] font-black pb-[1.05rem]  text-xl border-b-4 border-[#ccc14e]' : 'relative text-white text-xl font-normal pb-[0.9rem]   after:absolute after:-bottom-1.5 after:left-1/2 after:-translate-x-1/2 after:w-full after:h-[4px] after:bg-[#ccc14e] after:origin-center after:scale-x-0 after:transition-transform after:duration-900 hover:after:scale-x-100' }}">
                            FAQ
                        </a>
                    </li>
                </ul>

                <div class="relative">
                    <div class="flex">
                        <button @click="isOpen = !isOpen"
                            class="inline-flex items-center font-black text-xl text-[#ccc14e]">
                            @auth
                                {{ explode(' ', Auth::user()->name)[0] }}
                            @else
                                Masuk
                            @endauth
                        </button>

                        <img @click="isOpen = !isOpen" src="{{ asset('build/images/iconexpands.png') }}"
                            class="h-7 mt-1 ml-2 mr-4 cursor-pointer transition ease-in-out duration-500"
                            :class="{ 'rotate-180': isOpen }" alt="expand icon" />
                    </div>

                    <div x-show="isOpen" @click.away="isOpen = false"
                        x-transition:enter="transition ease-out duration-500 transform"
                        x-transition:enter-start="opacity-0 scale-x-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-x-95"
                        class="absolute right-5 mt-2 w-33 text-center origin-top-right rounded-md bg-white py-1 shadow-lg z-50">
                        @auth
                            <a onclick="navbarKore('btnProfil2')" id="btnProfil2"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Profile</a>
                            <form action="{{ route('logout') }}" method="POST"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Login</a>
                            <a href="{{ route('showregister') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>
