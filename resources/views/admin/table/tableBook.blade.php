@extends('partial.tempadmin')
@section('konten')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        {{-- header --}}
        @include('comp.header')
        <!--  Header End -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h5 class="card-title fw-semibold mb-4">Table Book</h5>
                        </div>
                        <a href="/createBook" type="button" class="btn btn-primary "><i class="bi bi-plus me-2 "></i>Add Book</a>
                    </div>
                </div>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Category</th>
                                <th scope="col">Book</th>
                                <th scope="col">Author</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">Year Publish</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>Comic</td>
                                <td>Solo Leveling</td>
                                <td>Chugong</td>
                                <td>D&C Media</td>
                                <td>2018</td>
                                <td>12</td>
                                <td>
                                    <div class="">
                                        <a href="/detailBook" class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Delete"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2</td>
                                <td>Comic</td>
                                <td>The Northern Blade</td>
                                <td>Chugong</td>
                                <td>D&C Media</td>
                                <td>2018</td>
                                <td>30</td>
                                <td>
                                    <div class="">
                                        <a href="#" class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Delete"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>3</td>
                                <td>Comic</td>
                                <td>Troll Trap</td>
                                <td>Chugong</td>
                                <td>D&C Media</td>
                                <td>2018</td>
                                <td>15</td>
                                <td>
                                    <div class="">
                                        <a href="#" class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Delete"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
