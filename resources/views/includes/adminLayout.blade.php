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

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>

    <div class="row main-admin">

        <div class="sidebar">
            <h5>Hello {{ auth()->user()->name }}</h5>
            <div class="admin-logout">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
                </form>
            </div>

            <hr>

            <h6>Admins</h6>
            <a href="{{ route('addAdmin') }}">Add admin</a>
            <a href="{{ route('admin.dashboard') }}">View all admins</a>

            <h6>Furniture</h6>
            <a href="{{ route('addProduct') }}">Add a product</a>
            <a href="{{ route('viewProducts') }}">View all products</a>

            <h6>Portfolio / Clients</h6>
            <a href="{{ route('addClient') }}">Add a client</a>
            <a href="{{ route('viewClients') }}">View all clients</a>

            <h6>Messages</h6>
            <a href="{{ route('viewMessages') }}">View all messages</a>

            {{-- <h6>Layout</h6>
            <a href="{{ route('viewHomeLayout') }}">Home</a>
            <a href="{{ route('furnitureLayout') }}">Furniture</a>
            <a href="{{ route('aboutLayout') }}">About</a>
            <a href="{{ route('historyLayout') }}">History</a>
            <a href="{{ route('contactLayout') }}">Contact</a> --}}
        </div>

        <div class="admin-content">

            <div class="row align-items-center justify-content-center admin-logo-section">
                <img src="{{ asset('images/BySoulaf - LOGO.png') }}">
            </div>

            @yield('adminContent')

        </div>

    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
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