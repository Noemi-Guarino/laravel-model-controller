@extends('layouts.app')

@section('page-title', 'movies')

@section('main-content')
<h1>
    Movies
</h1>

<div class="row p-4 ">
    @foreach ($movies as $index => $movie)
    <div class="card m-4 p-2" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $movie->title }}</h5>
          <p class="card-text">{{ $movie->original_title }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Lingua:</strong> {{ $movie->nationality }}</li>
          <li class="list-group-item"><strong>Data:</strong> {{ $movie->date }}</li>
          <li class="list-group-item"><strong>Data:</strong> {{ $movie->date }}</li>
          <li class="list-group-item"><strong>Voto:</strong> {{ $movie->vote }}</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Scopri i dettagli</a>
        </div>
    </div>
    @endforeach
</div>
@endsection