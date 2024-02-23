<?php

namespace App\Http\Controllers;

use App\Exports\borrowExport;
use App\Models\borrow;
use App\Models\buku;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
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
            Alert::error('Error', 'Stock Not Enough');
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
        $buku = buku::findOrFail($request->id_buku);
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
    public function update(Request $request, string $id, borrow $borrow)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $data = [
            'id' => $request->id,
            'id_buku' => $request->id_buku,
            'id_user' => $request->id_user,
            'quantity' => $request->quantity,
            'date_taken' => $request->date_taken,
            'return_date' => $request->return_date,
            'status' => $request->status
        ];

        $borrow = borrow::findOrFail($id);
        $borrow->update($data);

        if ($request->status == 2) {
            $buku = buku::findOrFail($request->id_buku);
            $buku->stock += $request->quantity;
            $buku->save();
        }
        Alert::success('Success', 'Success Update Status Borrow');
        return redirect()->route('borrow.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }

    public function export()
    {
        //
        Alert::success('Success', 'Success Export Borrow');
        return Excel::download(new borrowExport, 'borrow.xlsx');
    }
}
