@extends('layouts.main')

@section('title')
    Negozio
    {{--  
        OPPURE
        {{Route::currentRouteName()}} 
    --}}
@endsection

@section('content')

    <main>

        <div class="container mb-container d-flex flex-wrap">

            <h2 class="text-light">Nessun oggetto da acquistare!</h2>

        </div>
        
    </main>

@endsection