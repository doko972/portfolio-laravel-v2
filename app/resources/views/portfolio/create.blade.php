<!-- resources/views/portfolio/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Ajouter une nouvelle réalisation</h1>

    <form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Titre :</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="description">Description :</label>
            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
            @error('description') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="technologies">Technologies utilisées :</label>
            <input type="text" name="technologies" id="technologies" value="{{ old('technologies') }}">
            @error('technologies') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="image">Image du projet :</label>
            <input type="file" name="image" id="image">
            @error('image') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="url">Lien vers le projet :</label>
            <input type="url" name="url" id="url" value="{{ old('url') }}">
            @error('url') <span>{{ $message }}</span> @enderror
        </div>

        <button type="submit">Ajouter la réalisation</button>
    </form>
@endsection
