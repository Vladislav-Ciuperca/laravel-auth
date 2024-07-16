@extends('layouts.dash')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>{{ $types->name }}</h1>

            </div>
           <div class="btn btn-primary">
            <a href="http://localhost:8000/admin/types">torna alla lista dei types</a>
           </div>
        </div>
    </div>
@endsection
