@extends('layouts.dash')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                @foreach ($types as $type)
                    <a href="{{ route('admin.types.show', $type) }}">
                        <div class="card my-4 mx-2" style="width: 18rem;">
                            <div class="card-body d-flex flex-column justify-content-between">

                                <ul>

                                    <li>
                                        <h5 class="card-title">{{ $type->name }}</h5>
                                    </li>

                                </ul>

                               
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
