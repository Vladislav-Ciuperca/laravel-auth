@extends('layouts.dash')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi un Progetto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.projects.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="titolo" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea type="text" class="form-control" name="descrizione" required></textarea>
                    </div>

                    {{-- ////////////////////////// --}}
                    <div class="mb-3">

                        <label class="form-label">Percorso immagione</label>
                        <input type="file" class="form-control" name="immagine" required>
                        
                    </div>

                    
                    <div class="mb-3">

                        <label class="form-label">seleziona un tipo</label>
                        <input type="number" class="form-control" name="type" required>
                        
                    </div>

                    <div class="mb-3">

                        <label class="form-label">Scegli le tecnologie usate</label>
                        <input type="number" class="form-control" name="technology" required>
                        
                    </div>


                    {{-- ////////////////////////// --}}

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
