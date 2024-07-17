@extends('layouts.dash')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>{{ $tecnologies->name }}</h1>
                <h1 class="p-1"><i class="{{$tecnologies->icon}}"></i></h1>


            </div>
           <div class="btn btn-primary">
            <a href="http://localhost:8000/admin/tecnologies">torna alla lista delle tecnologie</a>
           </div>
        </div>
    </div>
@endsection
