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
                        <h5 class="card-title fw-semibold mb-4">Forms Add User</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="#" method="#">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Books Name" name="title" value="">
                                        <label for="floatingInput">Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Author Name" name="author" value="">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput"
                                            placeholder="Publisher Name" name="publisher" value="">
                                        <label for="floatingInput">Phone Number</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="role" id="role" class="form-control"
                                            placeholder="Role">
                                        <label for="floatingInput">Role</label>
                                    </div>
                                    <a href="#" class="btn btn-danger">Return</a>
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
