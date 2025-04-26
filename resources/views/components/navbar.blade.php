<nav class="bg-[#a8b387] p-4 flex items-center justify-between">

    <div class="w-32">
        <img src="{{ asset('build/images/logo.png') }}" alt="Logo" class="h-10 object-contain">
    </div>

   
    <div class="flex items-center space-x-10 text-2xl font-sans">
        <ul class="flex space-x-10">
            <li>
                <a href="/" 
                   class="{{ Request::is('/') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    Beranda
                </a>
            </li>
            <li>
                <a href="/tentang" 
                   class="{{ Request::is('tentang') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    Tentang
                </a>
            </li>
            <li>
                <a href="/blog" 
                   class="{{ Request::is('blog') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    Blog & Media
                </a>
            </li>
            <li>
                <a href="/event" 
                   class="{{ Request::is('event') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    Event
                </a>
            </li>
            <li>
                <a href="/faq" 
                   class="{{ Request::is('faq') ? 'text-[#5e6f52] font-black' : 'text-white font-normal hover:text-[#5e6f52]' }} transition duration-300">
                    FAQ
                </a>
            </li>
        </ul>

        <button class="inline-flex items-center font-black text-[#5e6f52]">
            Masuk <span class="ml-2 transform rotate-90 text-xl">&raquo;</span>
        </button>
    </div>
</nav>
