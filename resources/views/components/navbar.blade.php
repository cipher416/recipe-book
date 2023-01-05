<nav class="navbar navbar-expand-lg navbar-light bgnav">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('storage/bg/logo.png') }}" alt="Logo" width="50" height="50"
                 class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>

                @cannot('is-admin')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about">About Us</a>
                    </li>
                @endcannot

                @can('login-hide')
                    @cannot('is-admin')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/cart">My Cart</a>
                        </li>
                    @endcannot
                @endcan

                @cannot('is-admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($languages as $lang )
                                <li><a class="dropdown-item" href="/language/{{ $lang->id }}">{{ $lang->language_name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                @endcannot

                @can('login-hide')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/profile">Profile</a>
                    </li>
                @endcan
            </ul>
        </div>
        @can('login-hide')
            @can('is-admin')
                <div class="auth">
                    <a class="nav-link" href="{{url('logout')}}">Logout</a>
                </div>

            @endcan
            @cannot('is-admin')
                <div class="auth">
                    <a class="auth nav-link" href="{{url('logout')}}">Logout</a>
                </div>
            @endcan
        @endcan
        @cannot('login-hide')
            <a class="auth nav-link" href="{{url('register')}}">Register</a>
            <a class="auth nav-link" href="{{url('login')}}"></i>Login</a>
        @endcan
    </div>
</nav>
