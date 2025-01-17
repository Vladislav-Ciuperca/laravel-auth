@extends('layouts.dash')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica il Progetto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form enctype="multipart/form-data" method="POST"
                    action="{{ route('admin.projects.update', $progetto->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="titolo" value="{{ $progetto->titolo }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="descrizione" value="{{ $progetto->descrizione }}"
                            required></input>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Percorso immagione</label>
                        <input type="file" class="form-control" name="immagine" value="{{ $progetto->immagine }}"
                            nullable>
                    </div>
                    {{-- da usare anche il campo per inserire il " " e la "technology" --}}
                    {{-- /////////////////////////////////////////////// --}}
                    {{-- <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="type" value="{{ $progetto->type }}"
                            required></input>
                    </div> --}}
                    {{-- /////////////////////////////////////////////// --}}
                    {{-- <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="technology" value="{{ $progetto->technology }}"
                            required></input>
                    </div> --}}
                    {{-- /////////////////////////////////////////////// --}}

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
