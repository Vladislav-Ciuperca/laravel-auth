@extends('layouts.dash')

@section('content')
    <div class="container">
        <div class="row">
            <div class="pt-2 col-6 offset-3">
                {{$progetti->links('pagination::bootstrap-5')}}
            </div>
            <div class="col-12 d-flex flex-wrap">
                @foreach ($progetti as $progetto)
                    <div class="card my-4 mx-2" style="width: 18rem;">
                        <div class="card-body d-flex flex-column justify-content-between">

                            <div>
                                <p class="card-text">
                                    <a href="{{ route('admin.projects.show', $progetto->id) }}">

                                        {{-- //////////////////////// --}}
                                        @if (Str::startsWith($progetto->immagine, 'http'))
                                            <img src="{{ $progetto->immagine }}" alt="">
                                        @else
                                            <img src="{{ asset('storage/' . $progetto->immagine) }}" alt="">
                                        @endif
                                        {{-- //////////////////////// --}}

                                    </a>
                                </p>

                                <h5 class="card-title">{{ $progetto->titolo }}</h5>
                                <p class="descrizone card-text overflow-auto">{{ $progetto->descrizione }}</p>

                                {{-- <span class="descrizone card-text overflow-a uto">{{ $progetto->types->name }}</span> --}}
                                <span class="descrizone card-text overflow-a uto"> {{ optional($progetto->type)->name }}</span>

                                {{-- @dd($progetto->technology) --}}
                               @foreach ($progetto->technology as $single)
                                   <h2>{{$single->name}}</h2>
                               @endforeach
                                {{-- <h2>{{$progetto->progetto_id}}</h2> --}}
                                {{-- @foreach ($progetto->technologies as $technology)


                                    <h2>ciao?></h2>
                                @endforeach --}}

                            </div>

                            <div class="my-3 d-flex flex-column">
                                <button type="button" class="btn btn-primary"><a
                                        href="{{ route('admin.projects.edit', $progetto->id) }}">Modifica</a>
                                </button>

                                <form class="my-1" action="{{ route('admin.projects.destroy', $progetto) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary  w-100">Elimina</button>
                                </form>

                            </div>

                        </div>
                    </div>
                @endforeach

                <div class="pt-2 col-6 offset-3">
                    {{$progetti->links('pagination::bootstrap-5')}}
                </div>

                </h2>

            </div>
        </div>
    </div>
@endsection
