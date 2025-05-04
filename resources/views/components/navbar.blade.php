<nav x-data="{ isOpen: false, isBuka: false }" class="relative">
    <!-- Background blur -->
    <div class="absolute inset-0 bg-gradient-to-r from-white via-[#5e6f52] to-[#5e6f52] shadow-lg"></div>
    
    <!-- Konten navbar -->
    <div class="relative p-4 flex items-center justify-between">
        <div class="w-32">
            <img src="{{ asset('build/images/logo.png') }}" alt="Logo" class="h-15 " />
        </div>

        <div class="flex items-center space-x-10 text-2xl font-sans">
            <ul class="flex space-x-10">
                <li>
                    <a href="/" class="{{ Request::is('/') ? 'text-[#ccc14e] font-black relative' : 'text-white font-normal hover:text-[#ccc14e]' }} transition duration-300">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="/tentang" class="{{ Request::is('tentang') ? 'text-[#ccc14e] font-black' : 'text-white font-normal hover:text-[#ccc14e]' }} transition duration-300">
                        Tentang
                    </a>
                </li>
                <li>
                    <a href="/blog" class="{{ Request::is('blog') ? 'text-[#ccc14e] font-black max-w-100%' : 'text-white max-w-100% font-normal hover:text-[#ccc14e]' }} transition duration-300">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="/report" class="{{ Request::is('event') ? 'text-[#ccc14e] font-black' : 'text-white font-normal hover:text-[#ccc14e]' }} transition duration-300">
                        Report
                    </a>
                </li>
                <li>
                    <a href="/faq" class="{{ Request::is('faq') ? 'text-[#ccc14e] font-black' : 'text-white font-normal hover:text-[#ccc14e]' }} transition duration-300">
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

    <!-- Overlay -->
    <div x-show="isBuka"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-opacity-50 z-40"
    ></div>

    <!-- Sidebar -->
    <aside x-show="isBuka"
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="fixed left-0 top-0 h-full w-64 bg-white shadow-lg z-50"
    >
        <div class="p-6 flex flex-col items-center h-full">
            <!-- Profile Content -->
            <div class="flex-grow">
                <img src="{{ asset('build/images/anj.jpg') }}" alt="Profile" class="w-32 h-32 rounded-full border-4 border-gray-200 mb-4 mx-auto">
                <h2 class="text-xl font-bold text-gray-800 text-center">Arief Huda</h2>
                <p class="text-gray-600 mb-6 text-center">Binarians</p>

                <div class="flex justify-around w-full mb-6">
                    <div class="text-center">
                        <span class="block font-bold">125</span>
                        <span class="text-sm text-gray-500">Events</span>
                    </div>
                    <div class="text-center">
                        <span class="block font-bold">1.2k</span>
                        <span class="text-sm text-gray-500">Points</span>
                    </div>
                    <div class="text-center">
                        <span class="block font-bold">500</span>
                        <span class="text-sm text-gray-500">Stack</span>
                    </div>
                </div>

                <nav class="w-full space-y-2">
                    <a href="#" class="block p-2 bg-blue-100 text-blue-600 rounded hover:bg-blue-200 transition">Tukar Points</a>
                    <a href="#" class="block p-2 hover:bg-gray-100 rounded transition">History</a>
                    <a href="#" class="block p-2 hover:bg-gray-100 rounded transition">Help lingkungan</a>
                    <a href="#" class="block p-2 hover:bg-gray-100 rounded transition">Kelola Akun</a>
                </nav>
            </div>

            <!-- Close Button -->
            <button @click="isBuka = false" class="mt-auto px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300 transition w-full">
                Tutup
            </button>
        </div>
    </aside>
</nav>
