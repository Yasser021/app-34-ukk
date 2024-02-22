@extends('partial.tamplate')
@section('konten')
    <div class="container mt-5">
        <h2 class="text-center">BOOK</h2>
        <div class="row mt-5">
            @foreach ($book as $item)
                <div class="col-3">
                    <div class="text-center">
                        <a href="{{ route('book.show', $item->id) }}" class="text-decoration-none text-pr">
                            <div class="card-book">
                                <img src="{{ asset('storage/' . $item->cover) }}" alt="sampul" width="100" height="150">
                                <p class="text-center mt-3 text-decoration-none">{{ $item->title }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- @include('comp.cardBook') --}}
    @include('comp.pagination')
@endsection
