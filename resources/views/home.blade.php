@extends('layout.app')
@section('main-content')

<div class="container py-5">
  <div class="row g-4">
    @forelse ($movies as $movie)
        <div class="col-3">
          <div class="card h-100 p-2">
            <div class="info">
                <h2>Titolo: <span>{{ $movie->title }}</span></h2>
                <h4>Titolo originale: <span>{{ $movie->original_title }}</span></h4>
                <h4>Nazionalità: <span>{{ $movie->nationality }}</span></h4>
                <h4>Data di uscita: <span>{{ $movie->date }}</span></h4>
                <h4>Valutazione: <span>{{ $movie->vote }}</span></h4>
            </div>
          </div>
        </div>
    @empty
        
    @endforelse
  </div>
</div>
    
@endsection