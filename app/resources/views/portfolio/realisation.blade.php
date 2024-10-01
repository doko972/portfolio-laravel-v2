@extends('layouts.app')

@section('title', $realisation->title)

@section('content')
<div class="realisation-container">
    <h1>{{ $realisation->title }}</h1>
    <img src="{{ asset('storage/' . $realisation->image) }}" alt="{{ $realisation->title }}" class="realisation-image">
    <p>{{ $realisation->description }}</p>
    <p><strong>Technologies utilisées :</strong> {{ $realisation->technologies }}</p>
    <a href="{{ $realisation->url }}" class="btn">Voir le projet</a>
</div>
@endsection