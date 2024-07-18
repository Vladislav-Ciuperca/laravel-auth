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

                <form method="POST" action="{{ route('admin.technologies.update', $technologies->id), }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{$technologies->name}}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="description" value="{{$technologies->description}}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="icon" value="{{ $technologies->icon }}" required></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
