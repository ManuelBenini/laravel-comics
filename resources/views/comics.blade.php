@extends('layouts.main')

@section('title')
    Fumetti
    {{--  
        OPPURE
        {{Route::currentRouteName()}} 
    --}}
@endsection

@section('content')

    <main>

        <div class="container mb-container d-flex flex-wrap">

            <div class="mb-current-series">CURRENT SERIES</div>

            {{-- Card da ciclare --}}
            @foreach ($comics as $comic)

                <div class="mb-card">
                    <div class="logo">
                    <img src="{{$comic->image}}" alt="{{$comic->title}}">
                    </div>
                
                    <h6 class="my-3"></h6>
                </div>
                
            @endforeach

            <div class="moreBtn">
                <button class="mb-load-more">LOAD MORE</button>
            </div>

        </div>
        
    </main>

@endsection