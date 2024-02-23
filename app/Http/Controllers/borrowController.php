<?php

namespace App\Http\Controllers;

use App\Models\borrow;
use App\Models\buku;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class borrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $borrow = borrow::paginate('5');
        return view('admin.table.tableBorrow', compact('borrow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $book = buku::all();
        $user = User::all();
        return view('user.borrow', compact('user', 'book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_buku' => 'required|exists:bukus,id',
            'quantity' => 'required|max:5',
        ]);

        $user = Auth::user();

        $buku = buku::findOrFail($request->id_buku);
        if ($buku->stock < $request->quantity) {
            Alert::error('Error', 'Stock tidak mencukupi');
            return redirect()->route('borrow.create');
        }

        $date_taken = Carbon::now();
        $return_date = $date_taken->copy()->addWeeks(2);

        $data = borrow::create([
            'id_buku' => $buku->id,
            'id_user' => $user->id,
            'quantity' => $request->quantity,
            'date_taken' => $date_taken,
            'return_date' => $return_date,
        ]);

        $buku->stock -= $request->quantity;
        $buku->save();

        Alert::success('Success', 'Success Add Borrow');
        return redirect()->route('borrow.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $borrow = borrow::findOrFail($id);
        return view('admin.detail.detailBorrow', compact('borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $buku = buku::all();
        $user = User::all();
        $borrow = borrow::findOrFail($id);
        return view('admin.edit.editBorrow', compact('buku', 'user', 'borrow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'id_buku' => 'required|exists:bukus,id',
            'quantity' => 'required|max:5',
        ]);

        $buku = buku::findOrFail($request->id_buku);
        $borrow = borrow::findOrFail($id);
        $data = [
            'id_buku' => $buku->id,
            'id_user' => $borrow->id_user,
            'quantity' => $request->quantity,
        ];

        $borrow->update($data);
        $buku->stock -= $request->quantity;
        $buku->save();

        Alert::success('Success', 'Success Update Borrow');
        return redirect()->route('borrow.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 
        $borrow = borrow::findOrFail($id);

        $buku = $borrow->id_buku;
        $buku->stock += $borrow->quantity;
        $buku->save();

        $borrow->delete();
        Alert::success('Success', 'Success Delete Borrow');
        return redirect()->route('borrow.index');
    }

    public function export()
    {
        //

    }
}
