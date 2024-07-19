@extends('layouts.dash')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>{{ $project->titolo }}</h1>
            </div>
            <div class="col-8">
                @if (Str::startsWith($project->immagine, 'http'))
                    <img src="{{ $project->immagine }}" alt="">
                @else
                    <img src="{{ asset('storage/' . $project->immagine) }}" alt="">
                @endif
            </div>
            <div class="col-8">
                <p>Descrizione: {{ $project->descrizione }}</p>
            </div>
        </div>
    </div>
@endsection
