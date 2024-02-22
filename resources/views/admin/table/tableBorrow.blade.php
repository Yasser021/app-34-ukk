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
                            @foreach ($borrow as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user }}</td>
                                    <td>{{ $item->book }}</td>
                                    <td>{{ $item->date_taken }}</td>
                                    <td>{{ $item->date_return }}</td>
                                    <td>{{ $item->due_date }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>1</td>
                                    <td>
                                        @if ($item->status == 0)
                                            <span class="badge bg-dark">Booked</span>
                                        @elseif ($item->status == 1)
                                            <span class="badge bg-primary">Borrowed</span>
                                        @elseif ($item->status == 2)
                                            <span class="badge bg-success">Returned</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="">
                                            <a href="{{ route('borrow.detail', $item->id) }}" class="btn btn-primary"
                                                type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Detail"><i class="bi bi-eye"></i></a>
                                            <a href="{{ route('borrow.edit', $item->id) }}" class="btn btn-warning"
                                                type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Edit"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('borrow.destroy', $item->id) }}" method="post">
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
                    <div class="card-footer">
                        {{ $borrow->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
