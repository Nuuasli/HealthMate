<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class smallclassControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = DB::table('kelass')->join('pelatihs', 'kelass.id_pelatih', '=' , 'pelatihs.id')
        ->select('kelass.*', 'pelatihs.nama_pelatih as id_pelatih')
        ->get();
        return view('smallclass.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelatihs = DB::table('pelatihs')->get();
        return view('smallclass.create', compact('pelatihs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('kelass')->insert([
            'id' => $request->id,
            'nama_kelas' => $request->nama_kelas,
            'id_pelatih' => $request->id_pelatih,
            'jam' => $request->jam,
            'jam_selesai' => $request->jam_selesai,
            'Quota' => $request->Quota
        ]);
        return redirect()->route('classes.index')->with('success', 'Data kelas berhasil ditambahkan.');
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
        $data = DB::table('kelass')->where('id', $id)->first();
        $pelatihs = DB::table('pelatihs')->get();
        return view('smallclass.update', compact('data','pelatihs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('kelass')->where('id', $id)->update([
            'nama_kelas' => $request->nama_kelas,
            'id_pelatih' => $request->id_pelatih,
            'jam' => $request->jam,
            'jam_selesai' => $request->jam_selesai,
            'Quota' => $request->Quota
        ]);
        return redirect()->route('classes.index')->with('success', 'Data kelas berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kelass')->where('id', $id)->delete();
        return redirect()->route('classes.index')->with('success', 'Data kelas berhasil dihapus.');
    }
}
