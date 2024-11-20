<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class memberControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = DB::table('members')->get();
        return view('member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('members')->insert([
            'id' => $request->id,
            'nama_member' => $request->nama_member,
            'telepon' => $request->telepon,
            'email' => $request->email
        ]);
        return redirect()->route('member.index')->with('success', 'Data member berhasil ditambahkan.');
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
        $data = DB::table('members')->where('id', $id)->first();
        return view('member.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('members')->where('id', $id)->update([
            'nama_member' => $request->nama_member,
            'telepon' => $request->telepon,
            'email' => $request->email
        ]);
        return redirect()->route('member.index')->with('success', 'Data member berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('members')->where('id', $id)->delete();
        return redirect()->route('member.index')->with('success', 'Data member berhasil dihapus.');
    }
}
