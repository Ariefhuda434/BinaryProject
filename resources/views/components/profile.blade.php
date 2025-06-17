<section x-data="{ isProfil: false, isClose: false }" id="profile"
    class="hidden opacity-0 fixed inset-0 z-50 flex justify-center items-center py-12 min-h-screen transition-all duration-500 ease-in-out ">

    @auth
        <div 
         class="bg-white w-full mx-4 sm:mx-8 max-w-6xl p-6 sm:p-10 rounded-3xl shadow-2xl grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-10 relative overflow-y-auto max-h-[90vh] sm:max-h-[80vh]">
            <button onclick="document.getElementById('profile').classList.add('hidden')"
                class="absolute top-4 left-4 hover:scale-105 transition-all duration-300 ease-in-out">
                <span class="absolute top-4 left-4 w-5 h-0.5 bg-black rotate-45 rounded"></span>
                <span class="absolute top-4 left-4 w-5 h-0.5 bg-black -rotate-45 rounded"></span>
            </button>

            <div class="flex flex-col items-center text-center md:text-left px-2 sm:px-4">
                @if (Auth::user()->avatar == null)
                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="Profile Picture"
                        class="object-cover bg-[#ccc14e] p-2 mb-4 rounded-full h-28 w-28 sm:h-32 sm:w-32" />
                @else
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Galeri"
                        class="object-cover bg-[#ccc14e] p-2 mb-4 rounded-full h-28 w-28 sm:h-32 sm:w-32" />
                @endif

                <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" id="fileInput" name="avatar" class="hidden" onchange="this.form.submit()">
                    <label for="fileInput">
                        <img src="{{ asset('build/images/iconganti.png') }}" alt="Ganti Foto"
                            class="h-6 sm:h-7 mt-[-0.5rem] cursor-pointer">
                    </label>
                </form>

                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mt-2">{{ Auth::user()->name }}</h2>
                <div class="space-y-2 text-gray-700 text-sm w-full px-2 sm:px-0 mt-2">
                    <div><span class="font-semibold">Email:</span> {{ Auth::user()->email }}</div>
                    <div><span class="font-semibold">Telepon:</span> {{ Auth::user()->phone }}</div>
                    <div><span class="font-semibold">Alamat:</span> {{ Auth::user()->alamat }}</div>
                    <div><span class="font-semibold">Tanggal Lahir:</span> {{ Auth::user()->tanggal_lahir }}</div>
                    <div><span class="font-semibold">Jenis Kelamin:</span> {{ Auth::user()->jenis_kel }}</span></div>
                </div>

                <button @click="isProfil = true" id="resetClick"
                    class="mt-6 sm:mt-8 w-full hover:scale-105 active:scale-95 bg-[#5e6f52] hover:bg-[#4e5f42] text-white py-2 px-4 rounded-full transition-all duration-300 shadow-md">
                    Reset Password
                </button>
            </div>

            <div x-show="!isProfil"
                class="bg-gray-50 rounded-2xl p-4 sm:p-6 border border-gray-200 shadow-inner overflow-auto">
                <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">📜 Riwayat Aktivitas</h3>

                <ul class="space-y-4 text-sm text-gray-700">
                    @foreach ($historyGerakans as $istori)
                        <li class="flex items-start gap-3">
                            <div class="flex-col flex">
                                <div class="flex flex-wrap gap-2 items-center">
                                    <p
                                        class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">
                                        {{ $istori['judul'] }}
                                    </p>
                                    <p class="text-gray-400 text-xs">{{ $istori['tanggal'] }}</p>
                                </div>
                                <p class="indent-4 text-sm">{{ $istori['deskripsi'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div x-show="isProfil"
                class="bg-gray-50 rounded-2xl p-4 sm:p-6 border border-gray-200 flex flex-col justify-center text-center shadow-inner">
                <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-4">🔐 Reset Password</h3>

                @if (session('status'))
                    <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
                        {{ session('status') }}
                    </div>
                @elseif(session('errorReset'))
                    <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
                        {{ session('errorReset') }}
                    </div>
                @endif

                <form action="{{ route('reset.pw') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div id="formreset">
                        <input type="email" name="email"
                            class="p-3 w-full rounded-lg bg-gray-100 mb-3 text-sm sm:text-base" required
                            placeholder="Masukan Email">

                        <input type="password" name="password"
                            class="p-3 w-full rounded-lg bg-gray-100 mb-3 text-sm sm:text-base" required
                            placeholder="Masukan Password Lama">

                        <input type="password" name="new_password"
                            class="p-3 w-full rounded-lg bg-gray-100 mb-3 text-sm sm:text-base" required
                            placeholder="Masukan Password Baru">

                        <button id="resetbtn"
                            class="p-2 w-full sm:w-40 rounded-full bg-[#5e6f52] text-white hover:bg-[#a3b398] transition-colors duration-300">
                            Konfirmasi
                        </button>

                        <p class="text-sm text-gray-500 mt-4">
                            Butuh bantuan? <a href="/faq#password" class="text-blue-600 hover:underline">Lihat FAQ</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    @endauth
</section>
