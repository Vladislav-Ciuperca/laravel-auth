@extends('layouts.dash')

@section('content')
    <div class="container">
        <div class="row">
            <a class="p-2 text-center" href="{{route('admin.technologies.create')}}">
                <div class="btn btn-primary">Crea una nuova Technology</div>
            </a>
            <div class="col-12 d-flex flex-wrap">

                {{-- ///////////////////////////////// --}}
                @foreach ($technologies as $technology)
                    <a href="{{ route('admin.technologies.show', $technology) }}">
                        <div class="card my-4 mx-2 text-center" style="width: 18rem;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <ul>
                                    <li>
                                        <h5 class="card-title">{{ $technology->name }}</h5>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('admin.technologies.edit',$technology->id)}}"><button class="btn btn-primary text-center">Modificami</button></a>
                            <form class="my-1" action="{{ route('admin.technologies.destroy', $technology) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger  w-40">Elimina</button>
                                </form>
                        </div>
                    </a>
                @endforeach
                {{-- ///////////////////////////////// --}}


            </div>
        </div>
    </div>
@endsection
