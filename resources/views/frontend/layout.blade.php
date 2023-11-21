<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Multi Tenant Laravel</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/set1.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    @yield('styles')
</head>

<body>
<div style="z-index: 9999;" class="{{ request()->is('/', 'products', 'search') ? 'nav-menu bg transition' : 'dark-bg sticky-top'}}">
    <div style="background-color: #252a33;" class="container-fluid @if(request()->is('/', 'products', 'search')) fixed @endif">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('homepage') }}">Listing</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.products.index') }}">My Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

    @yield('content')

    <footer class="main-block dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>Copyright &copy; Dibuat oleh <a href="https://colorlib.com" target="_blank">Kelompok 23</a></p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>

    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.
            if ($(window).scrollTop() > 100) {
                $('.fixed').addClass('is-sticky');
            } else {
                $('.fixed').removeClass('is-sticky');
            };
        });
    </script>
    @yield('scripts')
</body>

</html>