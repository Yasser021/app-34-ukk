<div class="container mt-5">
    <h2 class="text-center">READER'S REVIEW</h2>
    <div class="row text-center my-5">
        @foreach ($review as $item)
            <div class="col-4">
                <div class="card-review text-start">
                    <h5 class="mt-2">Name : {{ $item->user->name }}</h5>
                    <h6 class="mt-2">Book : {{ $item->buku->title }}</h6>
                    <p class="my-2">Rating : {{ $item->rating }} <i class="bi bi-star-fill"></i></p>
                    <p class="">Review : {{ $item->review }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
