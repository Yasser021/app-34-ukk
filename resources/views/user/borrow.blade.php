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
                    <form action="" method="post">
                        @csrf
                        <select class="form-select py-3" aria-label="Default select example">
                            <option selected>Pick a Book!</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <input type="date" name="date" id="col" class="form-control py-3 my-3"
                            placeholder="Pick a Date">
                        <input type="number" name="number" id="col" class="form-control py-3"
                            placeholder="How Much?">
                        <button type="submit" class="btn btn-sec">Borrow</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
