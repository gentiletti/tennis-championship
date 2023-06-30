@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <header class="pt-3 pb-3 text-center">
                <h1>Historial de torneos</h1>
                <hr />
            </header>

            <div class="container">

                <div class="row">
                    @foreach ($tournaments as $tournament)
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $tournament->name }} {{ $tournament->created_at->format('d/m/Y H:i:s') }}</h5>
                                <p class="card-text"><i class="bi bi-trophy-fill"></i> {{ $tournament->winner ? $tournament->winner->name : '' }}</p>
                                <a href="{{ route('show-tournament', ['id' => $tournament->id]) }}" class="btn btn-primary">Ver Detalles</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if (count($tournaments) > 0)
                <div class="pagination">
                    @if ($tournaments->currentPage() > 1)
                    <a href="{{ $tournaments->previousPageUrl() }}" class="page-link">Anterior</a>
                    @endif

                    @for ($i = 1; $i <= $tournaments->lastPage(); $i++)
                        <a href="{{ $tournaments->url($i) }}" class="page-link{{ $i == $tournaments->currentPage() ? ' active' : '' }}">{{ $i }}</a>
                        @endfor

                        @if ($tournaments->currentPage() < $tournaments->lastPage())
                            <a href="{{ $tournaments->nextPageUrl() }}" class="page-link">Siguiente</a>
                            @endif
                </div>
                @else
                <div class="alert alert-info" role="alert">
                    No existen torneos creados aún.
                </div>
                @include('partials.create-tournament-buttons')
                @endif

            </div>
        </div>
    </div>
</div>
@endsection