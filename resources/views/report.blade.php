@extends('components.layout')

@section('title', 'Event')

@section('content')

<form action="{{ route('report.passing') }}" method="POST" enctype="multipart/form-data" class="bg-white p-5  rounded shadow-md space-y-4">
    @csrf

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
            {{ session('success') }}
        </div>
    @endif

    <div>
        <label for="laporan" class="block mb-1">Laporan</label>
        <input type="text" name="laporan" id="laporan" placeholder="Laporan" class="w-full border rounded p-2">
    </div>

    <div>
        <label for="images" class="block mb-1">Images</label>
        <input type="file" accept="image/*" name="images" id="images" class="w-full border rounded p-2">
    </div>

    <div>
        <label for="description" class="block mb-1">Description</label>
        <input type="text" name="description" id="description" placeholder="Description" class="w-full border rounded p-2">
    </div>

    <div>
        <label for="location" class="block mb-1">Location</label>
        <input type="text" name="location" id="location" placeholder="Location" class="w-full border rounded p-2">
    </div>

    <div>
        <label for="date" class="block mb-1">Date & Time</label>
        <input type="date" name="date" id="date" class="w-full border rounded p-2">
    </div>

    @if (!auth()->check())
    <div class="alert alert-warning">
        <a href="#" onclick="showAlert()" class="p-3 bg-gray-200 rounded inline-block">Kirim</a>
    </div>
@else 
    <button type="submit" class="p-3 bg-blue-200 rounded">Kirim</button>
@endif
</form>
<script>
   
        function showAlert() {
        const confirmation = confirm("Anda belum login.\nKlik OK untuk login, atau Cancel untuk tetap di halaman ini.");
        
        if (confirmation) {
            window.location.href = "{{ route('login') }}";
        } 
    }

</script>
@endsection
