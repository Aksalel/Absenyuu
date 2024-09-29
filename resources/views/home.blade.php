@extends('components.main')

@section('content')
<section class="mt-48 w-full flex-col z-10">
    <div class="container w-full">
        <div class="block text-center relative w-full items-center">
            <h1 class="font-bold text-4xl text-orange-50">Waktu adalah Emas</h1>
        </div>
    </div>
    <div class="container w-full mt-4">
        <div class="block text-center relative w-full items-center">
            <h1 class="font-thin opacity-95 text-xl text-orange-50">Ayo datang tepat waktu!</h1>
        </div>
    </div>
    <div class="container w-full mt-8 justify-center flex">
        <a class="block text-center w-2/3 items-center bg-orange-300 rounded-2xl py-2 hover:bg-orange-400 "href="/absen">
            <p class="font-bold text-2xl text-black hover:text-gray-800 hover:ease-in-out">
                Ayo Absen!
            </p>
        </a>
    </div>
    <div class="container w-full mt-24 justify-center flex ">
        <div class="block text-center w-2/3 items-center bg-orange-300 rounded-xl px-6 py-4 ">
            <a class="font-sans text-xl text-gray-800" href="">
                "berubah untuk diri sendiri bukan untuk orang lain" - Author
            </a>
        </div>
    </div>
</section>



@endsection