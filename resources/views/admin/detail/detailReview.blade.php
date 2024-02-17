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
                        <h5 class="card-title fw-semibold mb-4">Forms Detail Review</h5>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Books Name"
                                        name="id" value="" disabled>
                                    <label for="floatingInput">ID Review</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Author Name"
                                        name="user" value="" disabled>
                                    <label for="floatingInput">User</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Books Name"
                                        name="book" value="" disabled>
                                    <label for="floatingInput">Books Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Review" id="floatingTextarea2" name="review" style="height: 100px"
                                        disabled></textarea>
                                    <label for="floatingTextarea2">Review</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Rating"
                                        name="rating" value="" disabled>
                                    <label for="floatingInput">Rating</label>
                                </div>
                                <a href="#" class="btn btn-danger">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
