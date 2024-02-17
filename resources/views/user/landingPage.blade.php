@extends('partial.tamplate')
@section('konten')
    {{-- Jumbotron / Hero Section --}}
    <div class="container">
        <div class="row jm">
            <div class="col-xl-6 text-center">
                <img src="{{ asset('build/assets/image/ok.png') }}" alt="ok" width="350" height="350">
            </div>
            <div class="col-xl-6 mt-5">
                <h1>Empowering Minds<br> Enriching Souls.</h1>
                <p class="text-sc">Where Every Book is a Key to Infinite Knowledge.</p>
                <a href="/book" class="btn btn-pr" type="button">See All Book!</a>
            </div>
        </div>
    </div>
    {{-- end Jumbotron --}}
    {{-- card --}}
    @include('comp.cardBook')
    <div class="d-flex justify-content-center mt-3">
        <a href="#" class="btn btn-pr" type="button">See More !</a>
    </div>
    {{-- end book --}}
    {{-- Review --}}
    @include('comp.ripiu')
    {{-- End review --}}
    {{-- contact us --}}
    <div class="cf  py-5">
        <div class="container">
            <div class="text-center">
                <div class="py-5">
                    <h2 class="text-td">CONTACT US</h2>
                </div>
                <div class="">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.579791796836!2d106.6273436735982!3d-6.178259104728054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f929162547c7%3A0xbbf35137362e584d!2sSMK%20Negeri%204%20Kota%20Tangerang!5e0!3m2!1sid!2sid!4v1707211917334!5m2!1sid!2sid"
                        width="1000" height="500" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="map">
                    </iframe>
                </div>
                <div class="row mt-4">
                    <div class="d-flex justify-content-center">
                        <div class="col-4">
                            <img src="{{ asset('build/assets/image/phone.png') }}" alt="phone" height="45"
                                width="45">
                            <p class="text-td d-inline ps-3">08XXXXXXX</p>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('build/assets/image/envelope.png') }}" alt="mail" height="45"
                                width="45">
                            <p class="text-td d-inline ps-3">Library@gmail.com</p>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('build/assets/image/instagram.png') }}" alt="insta" height="45"
                                width="45">
                            <p class="text-td d-inline ps-3">Library_</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end contact --}}
@endsection
