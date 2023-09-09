@extends('layouts.main')

@section('page-title', 'Laravel Comics')

@section('main-content')
<h1>
    Homepage
</h1>

<a href="{{ route('comics') }}">comics</a>
@endsection
