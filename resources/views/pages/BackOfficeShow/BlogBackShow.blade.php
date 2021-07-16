@extends('template.back')
@section('content')
    <div class="container mt-5">
        <h3>Dérriere la Page Blog (SHOW)</h3>
    </div>

    <div class="d-flex justify-content-end container">
        <a class="fs-3" href="/BlogbackOffice">Retour</a>
    </div>

    <div class="container py-5">
        <div class="blog-post">
            <a href="blog-post.html">
                <img class="img-carousel post-img" src="{{ asset('assets/img/' . $show->photo) }}">
            </a>
            <div class="post-content">
                <h3>
                    <a class="post-title text-decoration-none" href="blog-post.html">{{ $show->sous_titre }}</a>
                </h3>
                <p class="section-text">{{ $show->p1 }}</p>
            </div><!-- /.post-content -->
        </div><!-- /.blog-post -->
    </div>
@endsection
