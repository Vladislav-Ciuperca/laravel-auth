@extends('layouts.dash')

@section('content')
    <div class="container">
        <div class="row">
            <a class="p-2 text-center" href="{{route('admin.tecnologies.create')}}">
                <div class="btn btn-primary">Crea una nuova Tecnologia</div>
            </a>
            <div class="col-12 d-flex flex-wrap">

                {{-- ///////////////////////////////// --}}
                @foreach ($tecnologies as $tecnology)
                    <a href="{{ route('admin.tecnologies.show', $tecnology) }}">
                        <div class="card my-4 mx-2 text-center" style="width: 18rem;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <ul>
                                    <li>
                                        <h5 class="card-title">{{ $tecnology->name }}</h5>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('admin.tecnologies.edit',$tecnology->id)}}"><button class="btn btn-primary text-center">Modificami</button></a>
                            <form class="my-1" action="{{ route('admin.tecnologies.destroy', $tecnology) }}"
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
