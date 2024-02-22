<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = kategori::paginate('5');
        return view('admin.table.tableKategori', compact('kategori'));

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
        $request->validate([
            'kategori' => 'required',
        ]);
        $data = [
            'kategori' => $request->kategori
        ];

        kategori::create($data);
        return redirect()->route('kategori.index')->with('success', 'Kategori Berhasil Tersimpan');
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
        $data = kategori::findOrFail($id);
        $request->validate([
            'kategori' => 'required',
        ]);
        $data->update($request->all());
        return redirect()->route('kategori.index')->with('success', 'Kategori Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = kategori::findOrFail($id);
        $data->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori Berhasil Terhapus');
    }
}
