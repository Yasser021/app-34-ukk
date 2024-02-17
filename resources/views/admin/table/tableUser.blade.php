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
                            <h5 class="card-title fw-semibold mb-4">Table User</h5>
                        </div>
                        <a href="/createuser" class="btn btn-primary "><i class="bi bi-plus me-2 "></i>Add Book</a>
                    </div>
                </div>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1</td>
                                <td>Yasser</td>
                                <td>Yasser@gmail.com</td>
                                <td>0857774859783</td>
                                <td>Admin</td>
                                <td>
                                    <div class="">
                                        <a href="/edituser" class="btn btn-warning" type="button" data-bs-toggle="tooltip"
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
                                <td>Hana@gmail.com</td>
                                <td>085XXXXXXXXX</td>
                                <td>Officer</td>
                                <td>
                                    <div class="">
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
                                <td>Anto@gmail.com</td>
                                <td>085XXXXXXXXX</td>
                                <td>User</td>
                                <td>
                                    <div class="">
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
