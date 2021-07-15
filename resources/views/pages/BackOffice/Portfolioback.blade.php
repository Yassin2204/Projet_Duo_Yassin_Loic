@extends('template.back')
@section('content')
<div class="container mt-5">
        <h3>Derriére la page Portfolio</h3>
    </div>

    <!-- la table -->
    <main>
        <div class="container">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Source image</th>
                        <th scope="col">Titre du service</th>
                        <th scope="col">Paragraphe</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ServicesPortfolio as $ServicePortfolio)
                        <tr>
                            <th scope="row">{{ $ServicePortfolio->id }}</th>
                            <td>{{ $ServicePortfolio->photo }}</td>
                            <td>{{ $ServicePortfolio->sous_titre }}</td>
                            <td>{{ $ServicePortfolio->p1}}</td>
                            <td>
                                <form action="/contenuPortfolioDelete/{{ $ServicePortfolio->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-white" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- le formulaire -->
    <section class="mt-5 mb-5">
        <div class="container w-25 bg-primary p-5 rounded-3">
            <form action="/formPortfolio" method="POST">
                @csrf
                <label for="exampleInputPassword1" class="form-label text-white">Selectionnez une image</label>
                <select class="form-select mb-2" name="photo" aria-label="Default select example">
                    <option selected>Selectionner</option>
                    <option value="portfolio-1.jpg">portfolio-1.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-2.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-3.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-4.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-5.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-6.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-7.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-8.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-9.jpg</option>
                    <option value="portfolio-1.jpg">portfolio-10.jpg</option>
                </select>
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
