@extends('layouts.main')

@section('title')
    Collezionabili
    {{--  
        OPPURE
        {{Route::currentRouteName()}} 
    --}}
@endsection

@section('content')

    <main>

        <div class="container mb-container d-flex flex-wrap">

            <h2 class="text-light">Nessun collezionabile!</h2>

        </div>
        
    </main>

@endsection