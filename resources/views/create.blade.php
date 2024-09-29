@extends('components.main')

@section('content')
<section class="mt-32 w-full flex-col">
    <form method="POST">
        @csrf
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
        <input type="text" name="noAbsen" class="font-bold text-xl text-black hover:text-gray-800 hover:ease-in-out" placeholder=" No Absen" required>
    </input>
</div>
    <div class="container w-full mt-8 justify-center flex">
            <input type="text" name="nama" class="font-bold text-xl text-black hover:text-gray-800 hover:ease-in-out" placeholder=" Nama" required>
            </input>
    </div>
    <div class="container w-full mt-8 justify-center flex">
        <input type="text" name="jamMasuk" class="block font-bold text-xl text-black hover:text-gray-800 hover:ease-in-out" placeholder=" 00:00" required>
        </input>
</div>
    <div class="container w-full mt-8 justify-center flex">
            <button class="bg-orange-300 font-bold text-xl text-black hover:text-gray-800 hover:ease-in-out rounded-xl">
                <p class="py-2 px-4">Absen!</p>
            </button>
    </div>
</form>
</section>



@endsection