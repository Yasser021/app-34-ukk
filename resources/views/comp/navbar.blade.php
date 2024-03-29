<nav class="navbar navbar-expand-lg p-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('landingPage.index') }}">
            <img src="{{ asset('build/assets/image/LogosV.png') }}" alt="LOGO" width="175px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link text-pr " aria-current="page" href="{{ route('landingPage.index') }}">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-pr" href="{{ route('book.index') }}">Book</a>
                </li>
                @if (Auth::check())
                    @if (Auth::user()->role == 'user')
                        <li class="nav-item ">
                            <a class="nav-link text-pr" href="{{ route('borrow.create') }}">Borrow</a>
                        </li>
                    @endif

                @endif
            </ul>
            @if (Auth::check())
                <a href="{{ route('profile.index') }}" class="text-pr me-2"
                    style="text-decoration: none;">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}" class="btn button-outline">Log out</a>
            @else
                <a href="{{ route('sesi') }}" class="btn button-outline">Log in</a>
            @endif

        </div>
    </div>
</nav>
