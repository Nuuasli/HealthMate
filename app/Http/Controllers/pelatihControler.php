<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pelatihControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelatih.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelatih.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('pelatihs')->insert([
            'nama_pelatih' => $request->nama_pelatih,
            'telepon' => $request->telepon,
            'email' => $request->email
        ]);
        return redirect()->route('pelatih.index')->with('success', 'Data pelatih berhasil ditambahkan.');
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
