<?php

namespace App\Http\Controllers;

use App\Exports\bukuExport;
use App\Models\buku;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = buku::paginate('5');
        return view('admin.table.tableBook', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku = buku::all();
        $kategori = kategori::all();
        return view('admin.create.createBook', compact('buku', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'publish_year' => 'required|date_format: Y',
            'stock' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'required',
            'id_kategori' => 'required|exists:kategoris,id',
        ]);
        $image = $request->file('cover')->store('cover', 'public');
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'publish_year' => $request->publish_year,
            'stock' => $request->stock,
            'cover' => $image,
            'desc' => $request->desc,
            'id_kategori' => $request->id_kategori
        ];
        buku::create($data);
        Alert::success('success', 'Success Add Book');
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $buku = buku::findOrFail($id);
        return view('admin.detail.detailBook', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $buku = buku::findOrFail($id);
        $kategori = kategori::all();
        return view('admin.edit.editBook', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'publish_year' => 'required|date_format:Y',
            'stock' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'required',
            'id_kategori' => 'required|exists:kategoris,id',
        ]);
        $image = $request->file('cover')->store('cover', 'public');

        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'publish_year' => $request->publish_year,
            'stock' => $request->stock,
            'cover' => $image,
            'desc' => $request->desc,
            'id_kategori' => $request->id_kategori
        ];
        $buku = buku::findOrFail($id);
        $buku->update($data);
        Alert::success('success', 'Success Update Book');
        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $buku = buku::findOrFail($id);
        $image = $buku->cover;

        if ($image) {
            Storage::delete($image);
        }

        $data = [
            'title' => $buku->title,
            'author' => $buku->author,
            'publisher' => $buku->publisher,
            'publish_year' => $buku->publish_year,
            'stock' => $buku->stock,
            'cover' => $buku->cover,
            'desc' => $buku->desc,
            'id_kategori' => $buku->id_kategori
        ];

        $buku->delete($data);
        return redirect()->route('buku.index');
    }
    public function export()
    {
        // dd(buku::all());
       return Excel::download(new bukuExport, 'buku.xlsx');
       Alert::success('success', 'Success Export Book');
    }
}
