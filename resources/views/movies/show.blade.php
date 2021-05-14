<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Movie</title>
    </head>
    <body>        
        <div class="movie">
            <h1>{{$movie->title}}</h1>  
            <h4>{{$movie->author}}</h4>
            <h4>{{$movie->genre}}</h4>
            <p>{{$movie->plot}}</p>
        </div>
        <div class="button">
            <a class="btn" href="{{route('movies.index')}}">Torna all'home page</a>
        </div>
    </body>
</html>