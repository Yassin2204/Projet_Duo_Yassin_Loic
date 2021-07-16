@extends('template.back')
@section('content')
    <div class="container mt-5">
        <h3>Dérriere la Page Blog</h3>
    </div>


    <main>
        <div class="container rounded-3">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Source image</th>
                        <th scope="col">Titre de service</th>
                        <th scope="col">Paragraphe</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ServicesBlog as $ServiceBlog)
                        <tr>
                            <th scope="row">{{ $ServiceBlog->id }}</th>
                            <td>{{ $ServiceBlog->photo }}</td>
                            <td>{{ $ServiceBlog->sous_titre }}</td>
                            <td>{{ $ServiceBlog->p1 }}</td>
                            <td>
                                <a href="/contenuBlogEdit/{{ $ServiceBlog->id }}">
                                    <button class="btn btn-primary text-white" type="submit">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form action="/contenuBlogDelete/{{ $ServiceBlog->id }}" method="POST">
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


    <section class="mt-5 mb-5">
        <div class="container w-25 bg-primary p-5 rounded-3">
            <form action="/formBlog" method="POST">
                @csrf
                <label for="exampleInputPassword1" class="form-label text-white">Selectionnez votre image</label>
                <select class="form-select mb-2" name="photo" aria-label="Default select example">
                    <option selected>Source image</option>
                    <option value="portfolio-1.jpg">portfolio-1.jpg</option>
                </select>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white">Titre du service</label>
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
