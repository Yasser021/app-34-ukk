@extends('partial.tempauth')
@section('konten')
    <div class="container r">
        <h1 class="text-center mb-4">LOGIN</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <div class="card-log">
                    {{-- <form action="#" method="POST"> --}}
                    {{-- @csrf --}}
                    <input type="email" name="email" value="{{ Session::get('email') }}" id="col"
                        class="form-control py-3" placeholder="Email">
                    <input type="password" name="password" id="col" class="form-control py-3 my-4"
                        placeholder="Password">
                    <div class="row">
                        <div class="col-6">
                            {{-- <button name="submit" type="submit" class="btn btn-log">Login</button> --}}
                            <a href="/dashboard" class="btn btn-log">Login</a>
                        </div>
                        <div class="col-6 mt-2">
                            <a href="/register" class="text-reg" style="text-decoration: none;">Register ?</a>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
