<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    
    <!-- App CSS -->
    <link href={{ asset('css/app.css') }} rel="stylesheet">

        <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">
    <link href={{asset("assets/css/responsive.css")}} rel="stylesheet">
    <link href={{asset("assets/css/colors.css")}} rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>DASHBOARD</title>
</head>

<!-- template BackOffice -->

<body>

    <!-- la navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav w-100 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/login">Changer la page
                                Home</a>
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
    <footer class="fixed-bottom">
        <div class="card text-center bg-secondary">
            <div class="card-body">
                <p class="card-text text-light">Projet Yassin - Loic</p>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.slicknav.min.js') }}></script>
    <script src={{ asset('assets/js/slick.min.js') }}></script>
    <script src={{ asset('assets/js/touchswipe.min.js') }}></script>
    <script src={{ asset('assets/js/skrollr.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.countTo.min.js') }}></script>
    <script src={{ asset('assets/js/script.js') }}></script>
</body>

</html>
