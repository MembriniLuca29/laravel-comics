@extends('layouts.main')



@section('page-title', 'Dettaglio Fumetto')
<h1 class="text-center mt-4">{{ $comic['title'] }}</h1>
@section('main-content')
<div class="container mt-5">
    <div class="my-card">
        <div class="row g-0">
            <div class="col-md-4 ">
                <img src="{{ $comic['thumb'] }}" class="my-img rounded-start" alt="{{ $comic['title'] }}">
            </div>
            <div class="col-md-8">
                <div class="card-body ml-3 ml-4">
                    
                    <p class="card-text">Description: {{ $comic['description'] }}</p>
                    <p class="card-text">Price: {{ $comic['price'] }}</p>
                    <p class="card-text">Series: {{ $comic['series'] }}</p>
                    <p class="card-text">Sale date: {{ $comic['sale_date'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
