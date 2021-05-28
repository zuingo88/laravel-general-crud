@extends('layouts.main_layout')
@section('content')
    <div id="home">
        <div class="container">
            <h1>Match: </h1>

            <div class="list_container">
                <ul class="flex_wrap">
                    @foreach ($matches as $match)
                        <li>
                            <div class="card flex space_bet">
                                <a class="pag" href="{{ route('show', $match->id) }}">
                                    <h3>{{ $match->team1 }} - {{ $match->team2 }}</h3>
                                </a>

                                <div class="options flex">
                                    <a class="mod" href="{{ route('edit', $match->id) }}">
                                        <h3>
                                            <i class="fas fa-user-edit"></i>
                                        </h3>
                                    </a>
                                    <a class="del" href="{{ route('destroy', $match->id) }}">
                                        <h3>
                                            <i class="fas fa-user-times"></i>
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
                                
                                {{-- <div class="options flex">
                                    <a class="mod" href="{{ route('edit', $employee->id) }}">
                                        <h3>
                                            <i class="fas fa-user-edit"></i>
                                        </h3>
                                    </a>
                                    <a class="del" href="{{ route('destroy', $employee->id) }}">
                                        <h3>
                                            <i class="fas fa-user-times"></i>
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </li>
                    
                </ul>
            </div> --}}

            {{-- <div class="container flex_center new">
                <a href="{{ route('createOspite') }}">
                    Inserisci nuovo ospite
                </a>
            </div> --}}
        </div>
    </div>
@endsection
