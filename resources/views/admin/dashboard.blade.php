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
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">1</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1">Yasser</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">Solo Leveling</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">February 9, 2024</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">February 24, 2024</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">1</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge bg-primary  fw-semibold">Borrowed</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">2</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1">Hana</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">Parasol Alliance</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">January 19, 2024</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">February 2, 2024</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">1</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge bg-success fw-semibold">Return</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">3</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1">Anto</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">The Northern Blade</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">March 1, 2024</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">March 15, 2024</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">1</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge bg-warning fw-semibold">Booked</span>
                                                </div>
                                            </td>
                                        </tr>
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
                        <h5 class="card-title fw-semibold">Newest Book</h5>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="{{ asset('build/assets/image/solo.jpg') }}"
                                    class="card-img-top p-3 rounded-0" alt="..."></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">Solo Leveling</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="fw-normal fs-3 mb-0">Comic</p>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="{{ asset('build/assets/image/para.jpeg') }}"
                                    class="card-img-top rounded-0 p-3" alt="..."></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">Parasol Alliance</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="fw-normal fs-3 mb-0">Comic</p>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="{{ asset('build/assets/image/1.jpeg') }}"
                                    class="card-img-top rounded-0 p-3" alt="..."></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">The Northern Blade</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="fw-normal fs-3 mb-0">Comic</p>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="{{ asset('build/assets/image/power.jpg') }}"
                                    class="card-img-top rounded-0 p-3" alt="..."></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">The 48 Law OF Power</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="fw-normal fs-3 mb-0">Self-Help</p>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                    <li><a class="" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Design and Developed by <a href="https://github.com/Yasser021" target="_blank"
                        class="pe-1 text-primary">Yasser</a><i class="ti ti-heart-filled" style="color: #D22727"></i></p>
            </div>
        </div>
    </div>
@endsection
