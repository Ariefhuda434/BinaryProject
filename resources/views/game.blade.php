@extends('components.layout')  
@section('title', 'Beranda')  
@section('content')
<div class="mt-20 mb-200 text-center w-screen ">
    <div class="mx-auto">
        <p class="text-6xl text-center">Game Suit Jawa</p>
        
        <div class="h-80 w-80 bg-gray-200 mx-auto my-4">
            Pilihan Komputer:
            <p class="text-center mt-4 text-4xl" id="pilihan_komputer"></p>
            <button onclick="acakkomputer()" class="mt-4 bg-white h-12 w-48 hover:bg-gray-500">Acak Pilihan Komputer</button>
        </div>

        <div class="h-80 w-80 bg-gray-200 mx-auto my-4">
            Pilihan Kamu:
            <p class="text-center mt-4 text-4xl" id="pilihan_kamu">Belum Memilih</p>
            <ul class="mt-4 space-y-2">
                <li onclick="pilihan(1)" class="hover:bg-gray-300 bg-white cursor-pointer p-2">Orang</li>
                <li onclick="pilihan(2)" class="hover:bg-gray-300 bg-white cursor-pointer p-2">Gajah</li>
                <li onclick="pilihan(3)" class="hover:bg-gray-300 bg-white cursor-pointer p-2">Semut</li>
            </ul>
        </div> 

        <div id="test" class="bg-gray-500 text-white text-xl font-bold h-16 w-80 mx-auto flex items-center justify-center rounded">
            Hasil akan muncul di sini
        </div>
    </div>
</div>

<script>
    let pilihanKomputer = 0;

    function acakkomputer(){
        pilihanKomputer = Math.floor(Math.random() * 3) + 1;
        document.getElementById('pilihan_komputer').innerText = terjemah(pilihanKomputer);
    }

    function pilihan(i) {
        let wak = document.getElementById('test');
        document.getElementById('pilihan_kamu').innerText = terjemah(i);
        
        if (i === pilihanKomputer) {
            wak.innerHTML = "Seri!";
        } else if (
            (i === 1 && pilihanKomputer === 3) ||
            (i === 2 && pilihanKomputer === 1) ||
            (i === 3 && pilihanKomputer === 2)
        ) {
            wak.innerHTML = "Menang!";
        } else {
            wak.innerHTML = "Kalah!";
        }
    }

    function terjemah(i){
        if(i === 1) return "Orang";
        if(i === 2) return "Gajah";
        if(i === 3) return "Semut";
        return "";
    }
</script>
@endsection
