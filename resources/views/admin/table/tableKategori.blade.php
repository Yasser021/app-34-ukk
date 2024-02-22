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
                                        <th scope="col">ID</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->kategori }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-warning" type="button" data-bs-placement="top"
                                                        data-bs-title="Edit" data-bs-target="#edit{{ $item->id }}"
                                                        data-bs-toggle="modal" data-bs-toggle="tooltip"><i
                                                            class="ti ti-pencil"></i></button>
                                                    <form action="{{ route('kategori.destroy', $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger ms-2    "
                                                            data-bs-toggle="tooltip" data-bs-title="Delete"
                                                            onclick="return confirm('Are you sure?')"><i
                                                                class="ti ti-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $kategori->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
                @include('comp.modalcreate')
                @include('comp.modalEdit')
            </div>
        </div>
    @endsection
