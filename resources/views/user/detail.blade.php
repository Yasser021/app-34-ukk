@extends('partial.tamplate')
@section('konten')
    {{-- detail Book --}}
    <div class="container mt-5">
        <h2 class="text-center">DETAIL BOOK</h2>
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-3">
                <img src="{{ asset('storage/' . $book->cover) }}" alt="Cover" width="250" height="350">
                <p class="mt-4">Rating : {{ $book->rating }} <i class="bi bi-star-fill ps-1"></i></p>
            </div>
            <div class="col-5">
                <p class="">Nama : {{ $book->title }}</p>
                <p class="">Author : {{ $book->author }}</p>
                <p class="">Publisher : {{ $book->publisher }}</p>
                <p class="">Year published : {{ $book->publish_year }} </p>
                <p class="">Synopsis : {{ $book->desc }}</p>
                <a href="/pinjam" class="btn btn-pr">Borrow</a>
            </div>
        </div>
    </div>
    {{-- end detail --}}
    {{-- Review User --}}
    <div class="container mt-5">
        <div class="row"></div>
        <h3 class=""> Give Your Review</h3>
        <div class="">
            <label for="" class="form-label mt-2">Give Rating</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">1 <i class="bi bi-star-fill ps-1"></i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">2 <i class="bi bi-star-fill ps-1"></i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3">3 <i class="bi bi-star-fill ps-1"></i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                <label class="form-check-label" for="inlineRadio4">4<i class="bi bi-star-fill ps-1"></i></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                <label class="form-check-label" for="inlineRadio5">5 <i class="bi bi-star-fill ps-1"></i></label>
            </div>
            <div class="mt-3">
                <label for="" class="mb-3">Comments</label>
                <div class="form-floating">
                    <textarea class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px"></textarea>
                    <label for="floatingTextarea">Give Ur Comments</label>
                </div>
            </div>
            <button type="submit" class="btn btn-pr">Submit</button>
        </div>

    </div>

    </div>
    {{-- end Review User  --}}
    {{-- ripiu --}}
    @include('comp.ripiu')
    {{-- end ripiu --}}
@endsection
