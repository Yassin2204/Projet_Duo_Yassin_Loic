@extends('template.back')
@section('content')
    <div class="container mt-5">
        <h3>Derriére la page Home (SHOW)</h3>
    </div>

    <div class="d-flex justify-content-end container">
        <a class="fs-3" href="/login">Retour</a>
    </div>

    <div class="container py-5">
        <div class="service row">
            <div class="service-icon col-auto ">
                <i class="{{ $show->icone }} display-4" aria-hidden="true"></i>
            </div><!-- /.service-icon -->
            <div class="service-content col-auto">
                <h4 class="service-title">{{ $show->sous_titre }}</h4>
                <p>{{ $show->p1 }}</p>
            </div><!-- /.service-content -->
        </div><!-- /.service -->
    </div>
@endsection
