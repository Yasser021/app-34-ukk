@extends('partial.tempadmin')
@section('konten')
    <div class="body-wrapper">
        @include('comp.header')
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h2 class="fw-semibold">Welcome, Admin!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Recent Borrow</h5>
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">ID</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">User</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Book Name</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Date Taken</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Date Return</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Quantity</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Status</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($borrow as $item)
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">{{ $item->id }}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1">{{ $item->user->name }}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal">{{ $item->buku->title }}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal">{{ $item->date_taken }}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal">{{ $item->return_date }}</p>
                                                </td>

                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal">{{ $item->quantity }}</p>
                                                </td>
                                                @if ($item->status == 1)
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-primary  fw-semibold">Borrowed</span>
                                                    </div>
                                                </td>
                                                @elseif ($item->status == 2)
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-success  fw-semibold">Return</span>
                                                    </div>
                                                </td>
                                                @endif
                                               
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">List Book</h5>
                    </div>
                </div>
                @foreach ($buku as $item)
                    <div class="col-sm-6 col-xl-3">
                        <a href="{{ route('buku.show', $item->id) }}">
                            <div class="card overflow-hidden rounded-2">
                                <div class="position-relative">
                                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top p-3 rounded-0"
                                        alt="..." >
                                </div>
                                <div class="card-body pt-3 p-4">
                                    <h6 class="fw-semibold fs-4">{{ $item->title }}</h6>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="fw-normal fs-3 mb-0">{{ $item->kategori->kategori }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://github.com/Yasser021" target="_blank"
                            class="pe-1 text-primary">Yasser</a><i class="ti ti-heart-filled" style="color: #D22727"></i>
                    </p>
                </div>
            </div>
        </div>
    @endsection
