@extends('layouts.main')

@section('title')
    Novit&agrave;
    {{--  
        OPPURE
        {{Route::currentRouteName()}} 
    --}}
@endsection

@section('content')

    <main>

        <div class="container mb-container d-flex flex-wrap">

            <h2 class="text-light">Nessuna novit&agrave;...al momento!</h2>

        </div>
        
    </main>

@endsection