@extends('layouts.main')

@section('page-title', 'Laravel Comics')

@section('main-content')
@include('partials.main-header')
<h2 class="text-center my-5 fs-2">
    Lista Comics
</h2>
<div class="my-container">
@foreach (config('comics') as $comic)

<div class="card">
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center">
        <img src="{{ $comic['thumb'] }}" class="img-fluid rounded-start " alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $comic['title'] }}</h5>
          <p class="card-text mt-3"><a href="{{ route('comic.show', ['id' => $loop->index]) }}" class="btn btn-primary">Vedi Dettagli</a>
            </p>
          <p class="card-text">Price: {{ $comic['price'] }}</p>
          <p class="card-text"><small class="text-body-secondary">Series: {{ $comic['series'] }}</small></p>
          <p class="card-text"><small class="text-body-secondary">Sale date  {{ $comic['sale_date'] }}</small></p>
        </div>
      </div>
    </div>
  </div>

    @endforeach
</div>
@endsection
