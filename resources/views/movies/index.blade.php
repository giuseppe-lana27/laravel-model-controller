@extends('layouts.base')

@section('pageTitle')
	Lista dei nostri film
@endsection

@section('content')

<div class="mb-3 text-right">
	<a href="{{route('movies.create')}}"><button type="button" class="btn btn-success">Aggiungi Film</button></a>
</div>
<table class="table table-striped">
	<thead>
		<tr>		
			<th scope="col">Titolo</th>			
			<th scope="col">Generi</th>
			<th scope="col">Autore</th>
			<th scope="col" class="text-center">Azioni</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($movies as $movie)
		<tr>			
			<td>{{$movie->title}}</td>			
			<td>{{$movie->genre}}</td>
			<td>{{$movie->author}}</td>
			<td class="actions">
				<a href="{{route('movies.show', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
				<a href="{{route('movies.edit', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-success">Modifica</button></a>
				<form action="{{route('movies.destroy', [ 'movie' => $movie->id ])}}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Elimina</button>
				</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@if (session('message'))
    <div class="alert alert-success" style="position: fixed; bottom: 30px; right: 30px">
        {{ session('message') }}
    </div>
@endif
@endsection