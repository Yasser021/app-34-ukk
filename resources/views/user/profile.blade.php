@extends('partial.tamplate')
@section('konten')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <h3 class="text-center">Your Profile</h3>
                <div class="card-form mt-3">
                    <form action="{{ route('profile.update', Auth::user()->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" class="form-control p-3" placeholder="Your Name"
                            value="{{ Auth::user()->name }}">
                        <input type="email" name="email" class="form-control p-3 my-3" placeholder="Your Email address"
                            value="{{ Auth::user()->email }}">
                        <input type="number" name="no" class="form-control p-3" placeholder="Your Phone Number"
                            value="{{ Auth::user()->no }}">
                        <input type="password" name="password" class="form-control p-3 my-3" placeholder="Your Password"
                            {{ Auth::user()->password }}>
                        <button class="btn btn-sec form-control" type="submit">Edit</button>
                    </form>
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
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrow as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->buku->title }}</td>
                                    <td>{{ $item->date_taken }}</td>
                                    <td>{{ $item->return_date }}</td>
                                    @if ($item->status == 1)
                                        <td>Borrowed</td>
                                    @elseif ($item->status == 2)
                                        <td>Returned</td>
                                    @endif
                                </tr>
                            @endforeach
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
