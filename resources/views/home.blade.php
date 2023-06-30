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
                @include('partials.create-tournament-buttons')
            </div>

        </div>
    </div>
</div>
@endsection