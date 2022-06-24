<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function characters(){
        return view('characters');
    }

    public function collectibles(){
        return view('collectibles');
    }

    public function comics(){

        $comics = config('comics');

        return view('comics', compact('comics'));
    }

    public function fans(){
        return view('fans');
    }

    public function games(){
        return view('games');
    }

    public function movies(){
        return view('movies');
    }

    public function news(){
        return view('news');
    }

    public function shop(){
        return view('shop');
    }

    public function tv(){
        return view('tv');
    }

    public function videos(){
        return view('videos');
    }
}
