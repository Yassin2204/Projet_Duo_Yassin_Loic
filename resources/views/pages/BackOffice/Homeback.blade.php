@extends('template.back')
@section('content')
    <div class="container mt-5">
        <h3>Derriére la page Home</h3>
    </div>


    <main>
        <div class="container">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Sous titre</th>
                        <th scope="col">Paragraphe</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ServicesHome as $ServiceHome)
                        <tr>
                            <th scope="row">{{ $ServiceHome->id }}</th>
                            <td>{{ $ServiceHome->icone}}</td>
                            <td>{{ $ServiceHome->sous_titre }}</td>
                            <td>{{ $ServiceHome->p1 }}</td>
                            <td>
                                <a href="/contenuHomeShow/{{ $ServiceHome->id }}">
                                    <button class="btn btn-success text-white" type="submit">Show</button></a>
                            </td>
                            <td>
                                <a href="/contenuHomeEdit/{{ $ServiceHome->id }}">
                                    <button class="btn btn-primary text-white" type="submit">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form action="/contenuHomeDelete/{{ $ServiceHome->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-white " type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>


    <section class="mt-5 mb-5">
        <div class="container w-25 bg-primary text-dark p-5 rounded-3">
            <form action="/formHome" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Icon </label>
                    <input type="text" class="form-control" name="icone" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white">Titre</label>
                    <input type="text" class="form-control" name="sous_titre" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Paragraphe</label>
                    <textarea type="text" class="form-control" name="p1" id="exampleInputEmail1"
                        aria-describedby="emailHelp"></textarea>
                </div>
                <button type="submit" class="btn bg-success text-white">Ajouter</button>
            </form>
        </div>
    </section>
@endsection