@extends('template.back')
@section('content')
    <div class="container mt-5">
        <h3>Derriére la page Portfolio (SHOW)</h3>
    </div>

    <div class="d-flex justify-content-end container">
        <a class="fs-3" href="/PortfoliobackOffice">Retour</a>
    </div>

    <div class="container">
        <div class="blog-post">
            <a href="#">
                <img src="{{ asset('assets/img/' . $show->photo) }}" alt="" class="img-fluid">
            </a>
            <div class="portfolio-info">
                <h3>{{ $show->sous_titre }}</h3>
                <p>{{ $show->p1 }}</p>
            </div><!-- /.portfolio-info  -->
        </div>
    </div>

    {{-- <div class="container">
        <div class="blog-post">
            <a href="blog-post.html">
                <img class="img-fluid" src="{{ asset('assets/img/' . $show->photo) }}">
            </a>
            <div class="post-content">
                <h3>
                    <a class="post-title text-decoration-none" href="blog-post.html">{{ $show->sous_titre }}</a>
                </h3>
                <p class="section-text">{{ $show->p1 }}</p>
            </div><!-- /.post-content -->
        </div><!-- /.blog-post -->
    </div> --}}
@endsection
