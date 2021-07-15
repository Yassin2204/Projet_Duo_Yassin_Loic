<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DASHBOARD</title>
</head>

<!-- template BackOffice -->

<body>

    <!-- la navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                 
                    <ul class="navbar-nav w-100 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/login">Changer la page Home</a>
                        </li>
                        <li class="nav-item ml-5 mr-5">
                            <a class="nav-link text-light " href="/BlogbackOffice">Changer la page blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/PortfoliobackOffice">Changer la page Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- le contenu BackOffice -->
    @yield('content')

    <!-- le footer -->
    <footer>
        <div class="card text-center bg-secondary">
            <div class="card-body">
                <p class="card-text text-light">Projet Yassin - Loic</p>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>