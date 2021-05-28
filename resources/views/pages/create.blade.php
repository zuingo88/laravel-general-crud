@extends('layouts.main_layout')
@section('content')
    <div id="create">
        <div class="container flex_col align_cen">
            <h1>Aggiungi match al db</h1>

            <form class="form_container flex_col" action="{{ route('store') }}" method="post">

                @csrf
                @method('POST')

                <div class="label_row flex">
                    <label for="team1">Squadra1: </label>
                    <input type="text" name="team1" id="team1">
                </div>

                <div class="label_row flex">
                    <label for="team2">Squadra2: </label>
                    <input type="text" name="team2" id="team2">
                </div>

                <div class="label_row flex">
                    <label for="point1">Punteggio casa: </label>
                    <input type="number" name="point1" id="point1">
                </div>

                <div class="label_row flex">
                    <label for="point2">Punteggio ospite: </label>
                    <input type="number" name="point2" id="point2">
                </div>

                <div class="label_row flex">
                    <label for="result">Result: </label>
                    <select name="result" id="result">
                        <option value="0">Squadra1</option>
                        <option value="1">Squadra2</option>

                    </select>
                </div>

                {{-- <button class="new" type="submit">Inserisci</button> --}}
                <input class="new" type="submit" value="INSERISCI">
            </form>
        </div>
    </div>
    </div>
@endsection
