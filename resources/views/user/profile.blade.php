@extends('partial.tamplate')
@section('konten')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <h3 class="text-center">Your Profile</h3>
                <div class="card-form mt-3">
                    <input type="text" name="name" class="form-control p-3" placeholder="Your Name">
                    <input type="email" name="email" class="form-control p-3 my-3" placeholder="Your Email address">
                    <input type="number" name="no" class="form-control p-3" placeholder="Your Phone Number">
                    <textarea class="form-control mb-3 mt-3" placeholder="Your address" name="address" style="height: 100px"></textarea>
                    <button class="btn btn-sec form-control">Edit</button>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-center mb-3">Borrowing History</h3>
                <div class="container card-form">
                    <table class=" table custom-table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Books Name</th>
                                <th scope="col">Date Taken</th>
                                <th scope="col">Date Return</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Solo Leveling</td>
                                <td>February 9, 2024</td>
                                <td>February 24, 2024</td>
                                <td><button type="button" class="btn btn-tab" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Detail">
                                        <i class="bi bi-eye"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>The Northern Blade</td>
                                <td>January 7, 2024</td>
                                <td>February 1, 2024</td>
                                <td><button type="button" class="btn btn-tab" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Detail">
                                        <i class="bi bi-eye"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Parasol Alliance</td>
                                <td>Desember 30, 2023</td>
                                <td>January 15, 2023</td>
                                <td><button type="button" class="btn btn-tab" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Detail">
                                        <i class="bi bi-eye"></i>
                                    </button></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
