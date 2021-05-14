<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Movies</title>
    </head>
    <body>
        <header>
            <div class="head">
                <h1>Tutti i Film</h1>
            </div>
        </header>
        <div class="movie-box">
            @foreach ($movies as $movie)  
                <div class="movie-card">                          
                    <h2>{{$movie->title}}</h2>
                    <a class="btn" href="{{route('movies.show', [ 'movie' => $movie->id ])}}">Dettaglio Film</a>                              
                </div>
            @endforeach
        </div>            
    </body>
</html>