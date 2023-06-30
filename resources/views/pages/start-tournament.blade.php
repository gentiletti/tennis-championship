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

                @foreach ($rounds as $round)
                @php
                    dd($round)
                @endphp
                @if (count($round >= 4))

                @elseif (count($round) == 2)
                <div class="round">
                    <h2>Cuartos de Final</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="match">
                                @foreach ($round[0] as $match)
                                    <div class="team">{{ $match->player1->name }}</div>
                                    <div class="team">{{ $match->player2->name }}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="match">
                                @foreach ($round[1] as $match)
                                    <div class="team">{{ $match->player1->name }}</div>
                                    <div class="team">{{ $match->player2->name }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                <div class="round">
                    <h2>Octavos de Final</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="match">
                                <div class="team">Equipo 1</div>
                                <div class="team">Equipo 8</div>
                            </div>
                            <div class="match">
                                <div class="team">Equipo 4</div>
                                <div class="team">Equipo 5</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="match">
                                <div class="team">Equipo 3</div>
                                <div class="team">Equipo 6</div>
                            </div>
                            <div class="match">
                                <div class="team">Equipo 2</div>
                                <div class="team">Equipo 7</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="round">
                    <h2>Cuartos de Final</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="match">
                                <div class="team">Ganador Octavos 1</div>
                                <div class="team">Ganador Octavos 2</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="match">
                                <div class="team">Ganador Octavos 3</div>
                                <div class="team">Ganador Octavos 4</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="round">
                    <h2>Semifinales</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="match">
                                <div class="team">Ganador Cuartos 1</div>
                                <div class="team">Ganador Cuartos 2</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="round">
                    <h2>Final</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="match">
                                <div class="team">Ganador</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection