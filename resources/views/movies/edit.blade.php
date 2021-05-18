@extends('layouts.base')

@section('pageTitle')
	Modifica film: {{$movie->title}}
@endsection

@section('content')

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">
		@method('PUT')
		@csrf		
		<div class="form-group">
			<label for="title">Titolo</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{old('title') ? old('title') : $movie->title}}">
		</div>		
		<div class="form-group">
			<label for="genre">Generi</label>
			<input type="text" class="form-control" id="genres" name="genre" placeholder="Generi" value="{{old('genre') ? old('genres') : $movie->genres}}">
		</div>
        <div class="form-group">
			<label for="author">Regista</label>
			<input type="text" class="form-control" id="author" name="author" placeholder="Regista" value="{{ old('author') }}">
		</div>
		<div class="form-group">
			<label for="plot">Trama</label>
			<textarea class="form-control" id="plot" name="plot" rows="8" placeholder="Trama...">{{old('plot') ? old('plot') : $movie->plot}}</textarea>
		</div>		

		<button type="submit" class="btn btn-primary">Salva</button>
	</form>
@endsection