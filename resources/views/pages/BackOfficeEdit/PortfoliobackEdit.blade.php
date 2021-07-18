@extends('template.back')
@section('content')
    <div class="container mt-5">
        <h3>Derriére la page Portfolio (EDIT)</h3>
    </div>

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
                    <tr>
                    </tr>
                    <form action="/contenuPortfolioUpdate/{{ $edit->id }}" method="POST" enctype="">
                        @csrf
                        @method('PUT')
                        <th scope="row">{{ $edit->id }}</th>
                        <td>
                            {{-- <select class="form-select mb-2" value="{{$edit->photo}}" name="photo"  aria-label="Default select example">
                                <option selected value="{{$edit->photo}}">{{ $edit->photo }}</option>
                                <option value="portfolio-1.jpg">portfolio-1.jpg</option>
                                <option value="portfolio-2.jpg">portfolio-2.jpg</option>
                                <option value="portfolio-3.jpg">portfolio-3.jpg</option>
                                <option value="portfolio-4.jpg">portfolio-4.jpg</option>
                                <option value="portfolio-5.jpg">portfolio-5.jpg</option>
                                <option value="portfolio-6.jpg">portfolio-6.jpg</option>
                                <option value="portfolio-7.jpg">portfolio-7.jpg</option>
                                <option value="portfolio-8.jpg">portfolio-8.jpg</option>
                                <option value="portfolio-9.jpg">portfolio-9.jpg</option>
                                <option value="portfolio-10.jpg">portfolio-10.jpg</option>
                            </select> --}}
                            <div class="mb-3">
                                <input type="text" class="form-control" required value="{{ $edit->photo }}"
                                    name="photo" id="exampleInputPassword1">
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
                </tbody>
            </table>
        </div>
    </main>
@endsection
