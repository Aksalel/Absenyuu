<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sigmaskibidi;
class SigmaskibidiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $sigma = Sigmaskibidi::all();
    //     return view('absen', compact('sigma'));
        
    // }
    public function index() {
        $user = Sigmaskibidi::all();
        return view('absen', [
            'users' => Sigmaskibidi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('create');
    // }


    public function create() {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        $user = new Sigmaskibidi();
        $user->noAbsen = request('noAbsen');
        $user->nama = request('nama');
        $user->jamMasuk = request('jamMasuk');
        $user->save();

        return redirect()->route('absen');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sigmaskibidi $user)
    {
        $user->delete();
        return redirect()->route('absen');
    }
}
