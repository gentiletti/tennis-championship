@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <header class="pt-3 pb-3 text-center">
                <h1>Crear torneo de tenis</h1>
                <hr />
            </header>

            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('create-tournament', ['gender' => 'female']) }}" class="btn btn-primary"><i class="bi bi-gender-female"></i> Crear Torneo Femenino</a>
                    </div>
                    <div class="col text-center">
                        <a href="{{ route('create-tournament', ['gender' => 'male']) }}" class="btn btn-primary"><i class="bi bi-gender-male"></i> Crear Torneo Masculino</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection