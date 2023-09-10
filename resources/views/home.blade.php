@extends('layouts.main')

@section('page-title', 'Laravel Comics')

@section('main-content')
<h2 class="text-center my-5 fs-2">
    Lista Comics
</h2>
<div class="my-container">
@foreach (config('comics') as $comic)

<div class="card">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $comic['thumb'] }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $comic['title'] }}</h5>
          <p class="card-text">click <a href="">here</a> for description</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

    @endforeach
</div>
<a href="{{ route('comics') }}">comics</a>
@endsection
