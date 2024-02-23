<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\review;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class reviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $review = review::paginate('5');
        return view('admin.table.tableReview', compact('review'));
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
        //
        $request->validate([
            'id_buku' => 'required|exists:bukus,id',
            'review' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $data = [
            'id_user' => Auth::user()->id,
            'id_buku' => $request->id_buku,
            'review' => $request->review,
            'rating' => $request->rating,
        ];
        review::create($data);
        Alert::success('Success', 'Success Add Review');
        return redirect()->route('buku.show', $request->id_buku);

        // $request = Auth::user()->id;

        // $request->validate([
        //     'id_user' => 'required|exists:users,id',
        //     'id_buku' => 'required|exists:bukus,id',
        //     'review' => 'required',
        // ]);

        // $data = [
        //     'id_user' => $request->id_user,
        //     'id_buku' => $request->id_buku,
        //     'review' => $request->review,
        // ];
        // review::create($data);
        // Alert::success('Success', 'Success Add Review');
        // return redirect('/review');
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
