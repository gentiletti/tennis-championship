@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <header class="pt-3 pb-3 text-center">
                <h1>Crear torneo de tenis {{ $genderName }}</h1>
                <hr />
            </header>

            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="row">
                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                @foreach ($powerOfTwo as $quantity)
                                <a href="{{ route('start-tournament', ['gender' => request()->get('gender'), 'quantity' => $quantity]) }}" class="btn btn-info"><i class="bi bi-plus-circle-fill"></i> Crear Torneo de {{ $quantity }} Participantes</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection