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
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="ID Borrow"
                                        name="id" value="" disabled>
                                    <label for="floatingInput">ID Borrow</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="User Name"
                                        name="user" value="" disabled>
                                    <label for="floatingInput">User</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Book Name" name="Book" value="" disabled>
                                    <label for="floatingInput">Book Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Borrow Date" name="borrow_date" value="" disabled>
                                    <label for="floatingInput">Borrow Date</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Return Date"
                                        name="return_date" value="" disabled>
                                    <label for="floatingInput">Return Date</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Status"
                                        name="status" value="" disabled>
                                    <label for="floatingInput">Status</label>
                                </div>
                                <a href="#" class="btn btn-danger">Return</a>
                                <a href="#" class="btn btn-success">Edit</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
