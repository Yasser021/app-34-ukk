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
                            <h5 class="card-title fw-semibold mb-4">Table Review</h5>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Book</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>Yasser</td>
                                <td>Solo Leveling</td>
                                <td>4</td>
                                <td>
                                    <div class="">
                                        <a href="/detreview" class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-danger" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Delete"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2</td>
                                <td>Hana</td>
                                <td>Parasol Alliance</td>
                                <td>5</td>
                                <td>
                                    <div class="">
                                        <a href="#" class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-danger" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Delete"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>3</td>
                                <td>Anto</td>
                                <td>Jigokuraku</td>
                                <td>3</td>
                                <td>
                                    <div class="">
                                        <a href="#" class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Detail"><i class="bi bi-eye"></i></a>
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
