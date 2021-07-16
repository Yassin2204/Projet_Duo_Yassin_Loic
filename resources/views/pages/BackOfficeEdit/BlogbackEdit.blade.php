@extends('template.back')
@section('content')
    <div class="container mt-5">
        <h3>Dérriere la Page Blog (EDIT)</h3>
    </div>

    <main>
        <div class="container rounded-3">
            <table class="table mt-5 ">
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
                    <tr>
                        <form action="/contenuBlogUpdate/{{ $edit->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <th scope="row">{{ $edit->id }}</th>
                            <td>
                                <select class="form-select mb-2" name="photo" required aria-label="Default select example">
                                    <option selected>{{ $edit->photo }}</option>
                                    <option value="portfolio-1.jpg">portfolio-1.jpg</option>
                                </select>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <input type="text" class="form-control" required value="{{ $edit->sous_titre }}"
                                        name="sous_titre" id="exampleInputPassword1">
                                </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <textarea type="text" class="form-control" style="height: 200px" name="p1" id="exampleInputEmail1" required
                                        aria-describedby="emailHelp">{{ $edit->p1 }}</textarea>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-primary text-white" type="submit">Edit</button>
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
