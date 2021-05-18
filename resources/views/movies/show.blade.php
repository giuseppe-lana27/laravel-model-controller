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
        <div class="movie container">
            <h1>{{$movie->title}}</h1>  
            <h4 class="mt-3">{{$movie->author}}</h4>
            <h4 class="mt-3">{{$movie->genre}}</h4>
            <p class="mt-3">{{$movie->plot}}</p>
            <div class="button mt-5">
                <a class="btn btn-primary" href="{{route('movies.index')}}">Torna all'home page</a>
            </div>
        </div>
        
    </body>
</html>