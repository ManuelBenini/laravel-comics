@extends('layouts.main')

@section('title')
    Characters
    {{--  
        OPPURE
        {{Route::currentRouteName()}} 
    --}}
@endsection

@section('content')

    <main>

        <div class="container mb-container d-flex flex-wrap">

            <h2 class="text-light">Nessun personaggio!</h2>

        </div>
        
    </main>

@endsection