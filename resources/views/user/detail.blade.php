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
                <p class="">Name : {{ $book->title }}</p>
                <p class="">Category : {{ $book->kategori->kategori }}</p>
                <p class="">Author : {{ $book->author }}</p>
                <p class="">Publisher : {{ $book->publisher }}</p>
                <p class="">Year published : {{ $book->publish_year }} </p>
                <p class="">Synopsis : {{ $book->desc }}</p>
                <p class="">Stock : {{ $book->stock }}</p>
                <div class="d-flex">
                    @if (Auth::check())
                        @if (Auth::user()->role == 'user')
                            <a href="{{ route('borrow.create') }}" class="btn btn-pr">Borrow</a>  
                        <button class="btn btn-pr ms-2" data-bs-toggle="modal" data-bs-target="#addreview">
                            <i class="ti ti-plus me-2"></i>Give Review</button>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- end detail --}}
    {{-- ripiu --}}
    @include('comp.ripiu')

    {{-- end ripiu --}}
    @include('comp.modalreview')
@endsection
