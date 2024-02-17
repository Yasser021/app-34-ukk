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
                        <h5 class="card-title fw-semibold mb-4">Forms Edit Book</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="#" method="#">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected disabled>Open this select menu</option>
                                            <option value="1">Comic</option>
                                            <option value="2">Novel</option>
                                            <option value="3">Fiction</option>
                                        </select>
                                        <label for="floatingSelect">Select Category</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Books Name" name="title" value="">
                                        <label for="floatingInput">Books Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Author Name" name="author" value="">
                                        <label for="floatingInput">Author Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Publisher Name" name="publisher" value="">
                                        <label for="floatingInput">Publisher</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput"
                                            placeholder="Year Publish" name="publish_date" value="">
                                        <label for="floatingInput">Year Publish</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput"
                                            placeholder="Books Stock" name="stock" value="">
                                        <label for="floatingInput">Stock</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="desc"
                                            style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Synopsis</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01">Image</label>
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>

                                    <a href="#" class="btn btn-danger">Return</a>
                                    <button type="submit" class="btn btn-success">Edit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
