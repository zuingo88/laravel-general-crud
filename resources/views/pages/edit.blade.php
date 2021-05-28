@extends('layouts.main_layout')
@section('content')
    <div id="edit">
         <div class="container flex_col align_cen">
            <h1>Modifica Dati Match</h1>

            <form class="form_container flex_col" action="{{ route('update', $match->id) }}" method="post">

                @csrf
                @method('POST')

                <div class="label_row flex">
                    <label for="team1">team1: </label>
                    <input type="text" name="team1" id="team1" value="{{ $match->team1 }}">
                </div>

                <div class="label_row flex">
                    <label for="team2">team2: </label>
                    <input type="text" name="team2" id="team2" value="{{ $match->team2 }}">
                </div>

                <div class="label_row flex">
                    <label for="point1">point1: </label>
                    <input type="number" name="point1" id="point1" value="{{ $match->point1 }}">
                </div>

                <div class="label_row flex">
                    <label for="point2">point2: </label>
                    <input type="number" name="point2" id="point2" value="{{ $match->point2 }}">
                </div>

                <select name="result" id="result">
                    <option value="0"
                        @if ($match->result==0) 
                            selected
                        @endif
                    >Team1
                    </option>

                    <option value="1"
                        @if ($match->result==1)
                            selected
                        @endif
                    >Team2</option>
                </select>

                <button class="edita" type="submit">Aggiorna</button>
            </form>

        </div>
    </div>
    </div>
@endsection
