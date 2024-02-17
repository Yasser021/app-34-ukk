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
                            <h5 class="card-title fw-semibold mb-4">Table Category</h5>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                            <i class="ti ti-plus me-2"></i>Add Category</button>
                    </div>
                </div>

                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <table class="table-responsive table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Comic</td>
                                        <td>
                                            <div class="">
                                                <button class="btn btn-warning" type="button" data-bs-placement="top"
                                                    data-bs-title="Edit" data-bs-target="#edit" data-bs-toggle="modal"
                                                    data-bs-toggle="tooltip"><i class="ti ti-pencil"></i></button>
                                                <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip"
                                                    data-bs-title="Delete" onclick="return confirm('Are you sure?')"><i
                                                        class="ti ti-trash"></i></button>

                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @include('comp.modalcreate')
                @include('comp.modalEdit')
            </div>
        </div>
    @endsection
