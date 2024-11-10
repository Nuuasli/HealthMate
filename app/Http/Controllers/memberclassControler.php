<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class memberclassControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = DB::table('kelass')->join('pelatihs', 'kelass.id_pelatih', '=' , 'pelatihs.id')
        ->select('kelass.*', 'pelatihs.nama_pelatih as id_pelatih')
        ->get();
        return view('classes', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validasi data, jika diperlukan
    // $request->validate([
    //     'kelas_id' => 'required|exists:kelass,id',
    // ]);

    // Data yang akan disimpan ke tabel pendaftaran
    // DB::table('pendaftaran')->insert([
    //     'kelas_id' => $request->kelas_id,
    //     'user_id' => auth()->id(), // ID user yang sedang login
    //     'created_at' => now(),
    //     'updated_at' => now(),
    // ]);

    // Redirect dengan pesan sukses
    // return redirect()->back()->with('success', 'Berhasil mendaftar kelas!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
