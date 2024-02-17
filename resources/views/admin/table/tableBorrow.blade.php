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
                            <h5 class="card-title fw-semibold mb-4">Table Borrow</h5>
                        </div>
                        {{-- <button class="btn btn-primary"><i class="bi bi-plus me-2"></i>Add Book</button> --}}
                    </div>
                </div>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">User</th>
                                <th scope="col">Book</th>
                                <th scope="col">Date Taken</th>
                                <th scope="col">Date Return</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>Yasser</td>
                                <td>Solo Leveling</td>
                                <td>February 9, 2024</td>
                                <td>February 23, 2024</td>
                                <td>1</td>
                                <td><span class="badge text-bg-primary">Borrowed</span></td>
                                <td>
                                    <div class="">
                                        <a href="/detbor" class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="/editbor" class="btn btn-warning" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit"><i class="bi bi-pencil"></i></a>
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
                                <td>January 19, 2024</td>
                                <td>February 2, 2024</td>
                                <td>1</td>
                                <td><span class="badge text-bg-success">Return</span></td>
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
                                <td>Anto</td>
                                <td>Jigokuraku</td>
                                <td>March 1, 2024</td>
                                <td>March 15, 2024</td>
                                <td>1</td>
                                <td><span class="badge text-bg-warning">Booked</span></td>
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
