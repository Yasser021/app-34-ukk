@extends('partial.tamplate')
@section('konten')
    {{-- detail Book --}}
    <div class="container mt-5">
        <h2 class="text-center">DETAIL BOOK</h2>
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-3  text-center">
                <img src="{{ asset('storage/' . $book->cover) }}" alt="Cover" width="250" height="350">
            </div>
            <div class="col-5">
                <p class="">Nama : {{ $book->title }}</p>
                <p class="">Author : {{ $book->author }}</p>
                <p class="">Publisher : {{ $book->publisher }}</p>
                <p class="">Year published : {{ $book->publish_year }} </p>
                <p class="">Synopsis : {{ $book->desc }}</p>
                <div class="d-flex">
                    <a href="{{ route('borrow.create') }}" class="btn btn-pr">Borrow</a>
                    <button class="btn btn-pr ms-2" data-bs-toggle="modal" data-bs-target="#addreview">
                        <i class="ti ti-plus me-2"></i>Give Review</button>
                </div>

            </div>
        </div>
    </div>
    {{-- end detail --}}
    {{-- Review User --}}
    {{-- <div class="container mt-5">
        <div class="row"></div>
        <h3 class=""> Give Your Review</h3>
        <form action="{{ route('review.store') }}" method="post">
            <div class="mt-3">
                <label for="" class="mb-3">Review</label>
                <div class="form-floating">
                    <textarea class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                    <label for="floatingTextarea">Give Ur Review About This Book</label>
                </div>
            </div>
            <button type="submit" class="btn btn-pr">Submit</button>
        </form>
    </div> --}}
    {{-- end Review User  --}}
    {{-- ripiu --}}
    @include('comp.ripiu')

    {{-- end ripiu --}}
    @include('comp.modalreview')
@endsection
