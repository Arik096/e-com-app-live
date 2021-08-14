<div>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('HomePage') }}">
                        <img src="{{ asset('img/arikp_logo-removebg-preview.png') }}" alt="logo"
                            style="max-height: 50px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('HomePage') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    cart
                                    <input type="text" id="cart" name="cart" style="max-width: 70px;max-height:30px;"
                                        value="10" disabled></a>
                            </li>
                        </ul>
                        <form class="d-flex me-2 mb-2 mb-lg-0">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                        @if (Session::has('user'))
                            @php
                                $user[] = Session::get('user');
                            @endphp
                            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                                <li class="nav-item me-2">
                                    <button class="btn btn-outline-primary">
                                        {{ $user[0]->name }}
                                    </button>
                                </li>
                                <li class="nav-item me-2">
                                    <button class="btn btn-outline-primary">
                                        Logout
                                    </button>
                                </li>
                            </ul>
                        @endif
                        @if (!Session::has('user'))
                            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                                <li class="nav-item me-2">
                                    <a href="{{ route('LoginPage') }}">
                                        <button class="btn btn-outline-primary">
                                            Login
                                        </button>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <button class="btn btn-outline-primary">Register</button>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <style>
        ul .nav-item {
            font-size: 25px;
            font-weight: 800;
        }

        ul .nav-item a {
            text-decoration: none !important;
        }

        ul .nav-item a:hover {
            color: white;
        }

        input[type=text] {
            border: none;
            border-bottom: 2px solid rgb(255, 208, 1);
            text-align: center;
        }

    </style>
</div>
