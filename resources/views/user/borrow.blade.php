@extends('partial.tamplate')
@section('konten')
    <div class="container m">
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <img src="{{ asset('build/assets/image/bor.png') }}" alt="man with a book" width="500" height="450">
            </div>
            <div class="col-5">
                <div class="card-form">
                    <h3 class="text-center mb-4">Borrowing A Books</h3>
                    <form action="/borrow" method="post" enctype="multipart/form-data">
                        @csrf
                        <select class="form-select py-3 text-sc" aria-label="Default select example" name="id_buku">
                            <option selected disabled>Pick A Book</option>
                            @foreach ($book as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                        <input type="number" name="quantity" id="col" class="form-control py-3 text-sc mt-3"
                            placeholder="How Much?" min="1" max="5">
                        <button type="submit" class="btn btn-sec">Borrow</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
