@extends('partial.tempadmin')
@section('konten')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('comp.header')
        <!--  Header End -->
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Profile</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('user.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Your Name" name="name" value="{{ $user->name }}">
                                        <label for="floatingInput">Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="your email Address" name="email" value="{{ $user->email }}">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput"
                                            placeholder="Phone Number" name="no" value="{{ $user->no }}">
                                        <label for="floatingInput">Phone Number</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingInput"
                                            placeholder="Password" name="password" value="{{ $user->password }}">
                                        <label for="floatingInput">Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example" name="role">
                                            <option selected disabled>Open this select menu</option>
                                            <option value="admin">Admin</option>
                                            <option value="petugas">Librarian</option>
                                            <option value="user">User</option>
                                        </select>
                                        <label for="floatingSelect">Select Role</label>
                                    </div>
                                    <div class="mb-2">
                                        <label for="role">Role Before : {{ $user->role }}</label>
                                    </div>
                                    <a href="{{ route('dashboard.index') }}" class="btn btn-danger">Return</a>
                                    <button class="btn btn-success" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
