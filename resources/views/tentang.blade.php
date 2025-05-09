@extends('components.layout')

@section('title', 'tentang')

@section('content')
<x-header></x-header>

<div class="flex flex-col items-center w-[1000px] mx-auto h-screen px-4 mx-auto ">
    <p class="font-black mt-5 text-[3rem]">Sekilas Tentang Binary Waste</p>
    <img src="asset('build/images/tentangimages.png')" class="h-20 w-20" alt="foto tentang" srcset="">
   
</div>



@endsection
