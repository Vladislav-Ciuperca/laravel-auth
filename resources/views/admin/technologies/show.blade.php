@extends('layouts.dash')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>{{ $technologies->name }}</h1>

            </div>
           <div class="btn btn-primary">
            <a href="{{route('admin.technologies.index')}}">torna alla lista delle Tecnologie</a>
           </div>
        </div>
    </div>
@endsection
