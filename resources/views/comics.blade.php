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
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
        <li class="list-group-item">
            {{ $comic['title'] }}
        </li>
    @endforeach
</ul>
@endsection
