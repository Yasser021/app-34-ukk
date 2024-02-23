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
                        <h5 class="card-title fw-semibold mb-4">Forms Detail Borrow</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('borrow.update', $borrow->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="User Name" name="user" value="{{ $borrow->user->name }}"
                                            disabled>
                                        <label for="floatingInput">User</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Book Name" name="Book Name" value="{{ $borrow->buku->title }}"
                                            disabled>
                                        <label for="floatingInput">Book Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Borrow Date" name="borrow_date" value="{{ $borrow->date_taken }}"
                                            disabled>
                                        <label for="floatingInput">Borrow Date</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Return Date" name="return_date" value="{{ $borrow->return_date }}"
                                            disabled>
                                        <label for="floatingInput">Return Date</label>
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
                                            <option value="0">Booked</option>
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
