@extends('partial.tempauth')
@section('konten')
    <div class="container r">
        <h1 class="text-center mb-4">LOGIN</h1>
        <div class="row d-flex align-items-center">
            <div class="d-flex justify-content-center">
                <div class="col-4">
                    <div class="card-log">
                        <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input type="email" name="email" value="{{ Session::get('email') }}" id="col"
                            class="form-control py-3" placeholder="Email">
                        <input type="password" name="password" id="col" class="form-control py-3 my-4"
                            placeholder="Password">
                        <div class="row">
                            <div class="col-6">
                                <button name="submit" type="submit" class="btn btn-log">Login</button>
                            </div>
                            <div class="col-6 mt-2">
                                <a href="{{ route('showreg') }}" class="text-reg" style="text-decoration: none;">Register ?</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
