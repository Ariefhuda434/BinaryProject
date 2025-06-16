     <section x-data="{ isProfil: false, isClose: false }" id="profile"
        class="hidden opacity-0 fixed inset-0 z-50 flex justify-center items-center py-12 min-h-screen transition-all duration-500 ease-in-out">

        @auth
            <div
                class="bg-white w-full max-w-6xl p-10 rounded-3xl shadow-2xl grid grid-cols-1 md:grid-cols-2 gap-10 relative">
                <button onclick="document.getElementById('profile').classList.add('hidden')" class="absolute top-4 left-4 hover:scale-105 transition-all duration-300  ease-in-out">
                    <span
                        class="absolute top-4 left-4 w-5 h-0.5 bg-black transform-all duration-300 ease  rotate-45 rounded"></span>
                    <span
                        class="absolute top-4 left-4 w-5 h-0.5 bg-black transform-all duration-300 ease  -rotate-45 rounded"></span>
                </button>

                <div class="flex flex-col items-center text-center md:text-left">
                    @if (Auth::user()->avatar == null)
                        
                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="Profile Picture"
                    class="object-cover bg-black p-2 mb-4 rounded-full h-35 w-35"/>
                    @else
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Galeri"
                                        class="object-cover bg-black p-2 mb-4 rounded-full h-35 w-35" />
                    @endif
                    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="file" id="fileInput" name="avatar" class="hidden" onchange="this.form.submit()">
    <label for="fileInput">
        <img src="{{ asset('build/images/iconganti.png') }}" alt="Ganti Foto" class="mt-[-1rem] h-7 cursor-pointer">
    </label>
</form>


                    <h2 class="text-3xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                    <p class="text-sm italic text-gray-500 mb-6">{{ Auth::user()->jenis_kel }}</p>

                    <div class="space-y-3 text-gray-700 text-sm w-full">
                        <div><span class="font-semibold">Email:</span> {{ Auth::user()->email }}</div>
                        <div><span class="font-semibold">Telepon:</span> {{ Auth::user()->phone }}</div>
                        <div><span class="font-semibold">Alamat:</span> {{ Auth::user()->alamat }}</div>
                        <div><span class="font-semibold">Tanggal Lahir:</span> {{ Auth::user()->tanggal_lahir }}</div>
                    </div>

                    <button @click="isProfil = true" id="resetClick"
                        class="mt-8 w-full hover:scale-105 active:scale-95 bg-[#5e6f52] hover:bg-[#a3b398] text-white py-2 px-4 rounded-full transition-all duration-300 shadow-md">
                        Reset Password
                    </button>
                </div>

                <div x-show="!isProfil" class="bg-gray-50 rounded-2xl p-6 border border-gray-200 shadow-inner">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">📜 Riwayat Aktivitas</h3>

                    <ul class="space-y-4 text-sm text-gray-700">
                         @foreach ($historyGerakans as $istori)
                             
                         <li class="flex items-start gap-3">
                           <div class="flex-col flex">
                               <div class="flex">
                                   <p class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">
                                       {{ $istori['judul'] }}
                                    </p>
                                    <p>
                                        <p class="text-gray-400">{{$istori['tanggal']  }}</p>
                                    </p>
                                </div>
                                <p class="indent-8">{{$istori['deskripsi']}}</p>
                            </div>
                        </li>
                        @endforeach   
                    </ul>
                </div> 



                <div x-show="isProfil"
                    class="bg-gray-50 rounded-2xl p-6 border border-gray-200 flex flex-col justify-center text-center shadow-inner">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">🔐 Reset Password</h3>

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
                            <input type="email" name="email" class="p-3 w-full rounded-lg bg-gray-100 mb-3" required
                                placeholder="Masukan Email">

                            <input type="password" name="password" class="p-3 w-full rounded-lg bg-gray-100 mb-3"
                                required placeholder="Masukan Password Lama">

                            <input type="password" name="new_password" class="p-3 w-full rounded-lg bg-gray-100 mb-3"
                                required placeholder="Masukan Password Baru">

                            <button id="resetbtn"
                                class="p-2 w-40 rounded-full bg-[#5e6f52] text-white hover:bg-[#a3b398] transition-colors duration-300">
                                Konfirmasi
                            </button>

                            <p class="text-sm text-gray-500 mt-4">
                                Butuh bantuan? <a href="/faq#password" class="text-blue-600 hover:underline">Lihat FAQ</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        @endauth
    </section>

    <script>
        document
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            form.classList.add('hidden');
            konfirmasi.classList.remove('hidden');
        });

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
