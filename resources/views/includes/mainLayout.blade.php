<!doctype html>
<html lang="en">

<head>
    <title>Bysoulaf</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div>
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ asset('images/BySoulaf - LOGO.png') }}"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{ asset('images/burgerbutton.png') }}">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link home-desktop" href="{{ route('home') }}">Home <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-link home-mobile" href="{{ route('home') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link furniture-desktop" href="/#furniture-section">Commercials</a>
                        <a class="nav-link furniture-mobile" href="{{ route('commercials') }}">Commercials</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link portfolio-desktop" href="/#residential-section">Residentials</a>
                        <a class="nav-link portfolio-mobile" href="{{ route('residentials') }}">Residentials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('history') }}">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="www.byloulwa.gulfmediasolution.com" target="_blank"
                            id="byloulwa-link">By Loulwa</a>
                    </li>
                    <li class="nav-item dropdown-li">
                        <div class="dropdown open">
                            <a class="nav-link dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <div class="dropdown-img"><img src="{{ asset('images/Union.png') }}"></div>
                                <div class="dropdown-links">
                                    <div class="dropdown-item">
                                        <a class="nav-link" id="drop-links" href="{{ route('admin.login') }}">Login</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mobile-login-nav">
                        <a class="nav-link"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a class="nav-link" href="{{ route('admin.login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    @yield('mainContent')

    <footer>

        <div class="container">

            <div class="row justify-content-center align-items-center">

                <div class="col-6 col-md-3">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('commercials') }}">Commercials</a>
                    <a href="{{ route('residentials') }}">Residential</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('history') }}">History</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
                <div class=" col-6 col-md-3">
                    <p>Follow Us</p>
                    <hr>
                    <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                    <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                </div>

                <div class="col-md-6 footer-logo-cont">
                    <hr>
                    <img src="{{ asset('images/BySoulaf - LOGO.png') }}">
                    <p>All Rights Reserved @2022</p>
                </div>

            </div>

        </div>

    </footer>



    <!-- Optional JavaScript -->
    <script src="{{URL::asset('js/slide.js');}}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>