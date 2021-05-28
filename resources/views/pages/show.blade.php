@extends('layouts.main_layout')
@section('content')
    <div id="show">
        <div class="container">
            <h1>
                @if ($match->result)
                    {{ $match->team1 }} {{ $match->point1 }} - {{ $match->point2 }} <u>{{ $match->team2 }}</u>
                @else
                    <u>{{ $match->team1 }}</u> - {{ $match->team2 }}
                @endif
            </h1>
            <h3>Identificativo del match: {{ $match->id }}</h3>
            <h3>Punteggio squadra casa: {{ $match->point1 }}</h3>
            <h3>Punteggio squadra ospite: {{ $match->point2 }}</h3>
            <h3>Vincitore: {{ $match->result }}</h3>

            
            <div class="options flex_col">
                <a class="mod" href="{{ route('edit', $match->id) }}">
                    <h3>
                        <i class="fas fa-user-edit"></i> Modifica match
                    </h3>
                </a>
                <a class="del" href="{{ route('destroy', $match->id) }}">
                    <h3>
                        <i class="fas fa-user-times"></i> Elimina match
                    </h3>
                </a>
            </div>
        </div>
    </div>
@endsection
