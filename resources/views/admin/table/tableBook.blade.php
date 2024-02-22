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
                        <div class="">
                            <a href="{{ route('buku.create') }}" type="button" class="btn btn-primary "><i
                                    class="bi bi-plus me-2 "></i>Add
                                Book</a>
                            <a href="/export" type="_blank" class="btn btn-success"><i class="ti ti-download me-2"></i>Generate Excel</a>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
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
                            @foreach ($buku as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kategori->kategori }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->publisher }}</td>
                                    <td>{{ $item->publish_year }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('buku.show', $item->id) }}" class="btn btn-primary"
                                                type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Detail"><i class="bi bi-eye"></i></a>
                                            <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning mx-2"
                                                type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Edit"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('buku.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Delete"><i
                                                        class="bi bi-trash3"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $buku->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
