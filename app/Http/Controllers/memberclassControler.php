<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserClass; // Model untuk tabel penghubung atau tabel tujuan

class memberclassControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = DB::table('kelass')->join('pelatihs', 'kelass.id_pelatih', '=', 'pelatihs.id')
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
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to log in first.');
        }

        // Validasi input
        $request->validate([
            'kelas_id' => 'required|exists:kelass,id', // Pastikan ID kelas valid
        ]);

        // Simpan data ke database
        UserClass::create([
            'user_id' => Auth::id(), // Ambil ID user yang sedang login
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->back()->with('success', 'Successfully registered to the class.');
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
