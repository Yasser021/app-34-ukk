@extends('partial.tempauth')
@section('konten')
    <div class="container m">
        <h1 class="text-center mb-4">REGISTER</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <div class="card-log">
                    {{-- <form action="#" method="POST"> --}}
                        {{-- @csrf --}}
                        <input type="text" name="name" id="col" class="form-control py-3 mb-3" placeholder="Your Name">
                        <input type="email" name="email" id="col" class="form-control py-3" placeholder="Your Email address">
                        <input type="number" name="no" id="col" class="form-control py-3 mt-3" placeholder="Phone Number">
                        <input type="password" name="password" id="col" class="form-control py-3 my-3"
                            placeholder="Password">
                        <div class="row">
                            <div class="col-6">
                                {{-- <button type="submit" name="submit" class="btn btn-log">Register</button> --}}
                                <a href="/dashboard" class="btn btn-log">Register</a>
                            </div>
                            <div class="col-6 mt-2">
                                <a href="/sesi" class="text-reg " style="text-decoration: none;">Login ?</a>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
