@extends('layouts.app')

@section('title', 'Mes Réalisations')

@section('content')
    <div class="realisation-list">
        @if ($realisations->isEmpty())
            <p>Aucune réalisation disponible pour le moment.</p>
        @else
            @foreach ($realisations as $realisation)
                <div class="realisation-item">
                    <img src="{{ asset('storage/'.$realisation->image) }}" alt="{{ $realisation->title }}" class="realisation-image">
                    <h3>{{ $realisation->title }}</h3>
                    <p>{{ Str::limit($realisation->description, 100) }}</p>
                    <a href="{{ route('project.show', $realisation->id) }}" class="btn">Voir plus</a>
                </div>
            @endforeach
        @endif
    </div>
@endsection
