@extends('layouts.main')

@section('page-title')
Comics
@endsection

@section('main-content')
<h1>
    Comics
</h1>

<ul class="list-group">
    @foreach ($comics as $comic)
        <li class="list-group-item">
            {{ $comic['title'] }}
        </li>
    @endforeach
</ul>
@endsection
