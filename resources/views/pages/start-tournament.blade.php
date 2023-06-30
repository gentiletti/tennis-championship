@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <header class="pt-3 pb-3 text-center">
                <h1>{{ $tournament->name }}</h1>
                <hr />
            </header>

            <div class="container">

                @foreach ($rounds as $number => $round)

                @if (isset($round['groups']))

                <div class="round">
                    <h2 class="text-center">Ronda {{ $number }}</h2>

                    <div class="row">
                        @foreach ($round['groups'] as $matches)
                        <div class="col-md-6">
                            @foreach ($matches as $match)
                            <div class="match">
                                <div class="team {{ $match['player1']->is_winner ? 'text-success fw-bold' : '' }}">
                                    @if ($match['player1']->is_winner)
                                    <i class="bi bi-star-fill"></i>
                                    @endif
                                    {{ $match['player1']->name }}
                                </div>
                                <div class="team {{ $match['player2']->is_winner ? 'text-success fw-bold' : '' }}">
                                    @if ($match['player2']->is_winner)
                                    <i class="bi bi-star-fill"></i>
                                    @endif
                                    {{ $match['player2']->name }}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>

                </div>

                @else

                <div class="round">
                    <h2 class="text-center">Final</h2>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="match">
                                <div class="team {{ $round['matches'][0]['player1']->is_winner ? 'text-success fw-bold' : '' }}">
                                    @if ($round['matches'][0]['player1']->is_winner)
                                    <i class="bi bi-star-fill"></i>
                                    @endif
                                    {{ $round['matches'][0]['player1']->name }}
                                </div>
                                <div class="team {{ $round['matches'][0]['player2']->is_winner ? 'text-success fw-bold' : '' }}">
                                    @if ($round['matches'][0]['player2']->is_winner)
                                    <i class="bi bi-star-fill"></i>
                                    @endif
                                    {{ $round['matches'][0]['player2']->name }}
                                </div>
                            </div>
                            <a href="javascript:;" class="winner-image"><img src="{{ $round['matches'][0]['winner']->image }}" class="rounded mx-auto d-block" alt="{{ $round['matches'][0]['winner']->name }}"></a>
                        </div>
                    </div>
                </div>
                @endif

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection