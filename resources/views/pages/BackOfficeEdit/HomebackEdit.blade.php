@extends('template.back')
@section('content')
    <div class="container mt-5">
        <h3>Derriére la page Home (EDIT)</h3>
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
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <form action="/contenuHomeUpdate/{{ $edit->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <th scope="row">{{ $edit->id }}</th>
                            <td>
                                <div class="mb-3">
                                    <input type="text" class="form-control" required value="{{ $edit->icone }}" name="icone"
                                        id="exampleInputPassword1">
                                </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <input type="text" class="form-control" required value="{{ $edit->sous_titre }}"
                                        name="sous_titre" id="exampleInputPassword1">
                                </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <textarea type="text" class="form-control" style="height: 200px" name="p1"
                                        id="exampleInputEmail1" required
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
