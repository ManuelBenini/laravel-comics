<header>

    <div class="container mb_container d-flex align-items-stretch justify-content-between">
  
      <div class="logo">
        <a href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt=""></a>
      </div>
  
      <nav>
        <ul class="d-flex">
          <li class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}"><a href="{{route('characters')}}">Characters</a></li>
          <li class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}"><a href="{{route('comics')}}">Comics</a></li>
          <li class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}"><a href="{{route('movies')}}">Movies</a></li>
          <li class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}"><a href="{{route('tv')}}">TV</a></li>
          <li class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}"><a href="{{route('games')}}">Games</a></li>
          <li class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}"><a href="{{route('collectibles')}}">Collectibles</a></li>
          <li class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}"><a href="{{route('videos')}}">Videos</a></li>
          <li class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}"><a href="{{route('fans')}}">Fans</a></li>
          <li class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}"><a href="{{route('news')}}">News</a></li>
          <li class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}"><a href="{{route('shop')}}">Shop</a></li>
        </ul>
      </nav>
  
    </div>
  
  
</header>