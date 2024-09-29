@extends('components.main')

@section('content')
    <div class="flex w-full mt-10 items-center justify-center">
        <div class="w-full items-center justify-center px-2">
            <div class="w-full container mt-10 items-center justify-center">
                <table class="bg-white shadow-md rounded mt-20 w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-xl">No</th>
                            <th class="py-2 px-4 border-b text-xl">Absen</th>
                            <th class="py-2 px-4 border-b text-xl">Nama</th>
                            <th class="py-2 px-4 border-b text-xl text-nowrap">Jam Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $i => $user)
                        <tr class="">
                            <td class="py-3 px-2 border-b text-xl text-center">{{ $i+1 }}</td>
                            <td class="py-3 px-2 border-b text-xl text-center">{{ $user['noAbsen'] }}</td>
                            <td class="py-3 px-2 border-b text-xl text-center">{{ $user['nama'] }}</td>
                            <td class="py-3 px-2 border-b text-xl text-center">{{ $user['jamMasuk'] }}</td>
                            <td class="py-3 px-2 border-b text-xl text-center">
                                <div class="flex gap-2 justify-center">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 transition hover:bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex items-center mt-10 mb-12 ml-2">
                    <a href="/create" class="bg-orange-300 rounded-lg px-6 py-2 hover:bg-hoverbt transition hover:ease-in-out">
                        <p class="font-semibold text-lg text-white">Tambah</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection