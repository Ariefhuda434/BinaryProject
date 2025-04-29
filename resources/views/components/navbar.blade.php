<nav x-data="{ isOpen: false }" class="bg-[#a8b387] p-4 flex items-center justify-between">

    <div class="w-32">
        <img src="{{ asset('build/images/logo.png') }}" alt="Logo" class="h-10 object-contain">
    </div>

    <div class="flex items-center space-x-10 text-2xl font-sans">
        <ul class="flex space-x-10">
            <li>
                <a href="/" class="{{ Request::is('/') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    Beranda
                </a>
            </li>
            <li>
                <a href="/tentang" class="{{ Request::is('tentang') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    Tentang
                </a>
            </li>
            <li>
                <a href="/blog" class="{{ Request::is('blog') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    Blog & Media
                </a>
            </li>
            <li>
                <a href="/event" class="{{ Request::is('event') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    Event
                </a>
            </li>
            <li>
                <a href="/faq" class="{{ Request::is('faq') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    FAQ
                </a>
            </li>
        </ul>

     
        <button 
         @mouseover="isOpen = true"
         @mouseleave="isOpen = false"
         @click="isOpen = !isOpen" 
         class="inline-flex items-center font-black text-[#5e6f52]">
            Masuk
        </button>

        <img
        @mouseover="isOpen = true"
        @mouseleave="isOpen = false" 
        @click="isOpen = !isOpen" src="{{ asset('build/images/iconexpands.png') }}" class="h-7 mt-1 -ml-7 cursor-pointer transition ease-in-out duration-500"
        :class="{'rotate-180': isOpen}"  
        alt="expand icon">



        <!-- Dropdown Menu -->
        <div x-show="isOpen"
            @mouseover="isOpen = true"
            @mouseleave="isOpen = false"
            x-transition:enter="transition ease-out duration-500 transform"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute text-center right-14 mt-30 w-30 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5">
            <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Login</a>
            <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Register</a>
        </div>
    </div>
</nav>
