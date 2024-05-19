<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view ('mahasiswas.index')->with('mahasiswas', $mahasiswas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Mahasiswa::create($input);
        return redirect('mahasiswa')->with('flash_message', 'Mahsiswa Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswas.show')->with('mahasiswas', $mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswas.edit')->with('mahasiswas', $mahasiswa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $input = $request->all();
        $mahasiswa->update($input);
        return redirect('mahasiswa')->with('flash_message', 'Mahasiswa Diperbarui!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::destroy($id);
        return redirect('mahasiswa')->with('flash_message', 'Mahasiswa Terhapus!');
    }
}
