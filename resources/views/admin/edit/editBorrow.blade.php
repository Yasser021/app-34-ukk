@extends('partial.tempadmin')
@section('konten')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('comp.header')
        <!--  Header End -->
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Forms Edit status Borrow</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="/borrow/{{ $borrow->id }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ $borrow->id }}">
                                    <div class="form-floating mb-3">
                                        <input type="hidden" class="form-control" id="floatingInput"
                                            placeholder="User Name" name="id_user" value="{{ $borrow->id_user }}" >
                                 
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="hidden" class="form-control" id="floatingInput"
                                            placeholder="Book Name" name="id_buku" value="{{ $borrow->id_buku }}" >
                                       
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="hidden" class="form-control" id="floatingInput"
                                            placeholder="Borrow Date" name="date_taken" value="{{ $borrow->date_taken }}" >
                                      
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="hidden" class="form-control" id="floatingInput"
                                            placeholder="Return Date" name="return_date" value="{{ $borrow->return_date }}" >
                                     
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="hidden" class="form-control" id="floatingInput"
                                            placeholder="Quantity" name="quantity" value="{{ $borrow->quantity }}" >
                                       
                                    </div>
                                    {{-- <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Status"
                                        name="status" value="{{ $borrow->status }}">
                                    <label for="floatingInput">Status</label>
                                </div> --}}
                                    <div class="form-floating">
                                        <select class="form-select mb-2" id="floatingSelect"
                                            aria-label="Floating label select example" name="status">
                                            <option selected disabled>Open this select menu</option>
                                            <option value="1">Borrow</option>
                                            <option value="2">Return</option>
                                        </select>
                                        <label for="floatingSelect">Status</label>
                                    </div>

                                    <a href="{{ url()->previous() }}" class="btn btn-danger">Return</a>
                                    <button class="btn btn-success" type="submit">Edit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
