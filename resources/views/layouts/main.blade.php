<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    @include('partials.header')

    @include('partials.jumbotron')

    <main>

        <div class="container mb-container d-flex flex-wrap">

            @yield('content')

            <h2 class="text-light">@yield('h2-text')</h2>

        </div>
        
    </main>

    
    @include('partials.shopCategories')
    
    @include('partials.footer')
    
</body>
</html>