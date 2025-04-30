@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $album->title }}</h1>
        <p><strong>Artist:</strong> {{ $album->artist }}</p>
        <p><strong>Release Date:</strong> {{ $album->release_date }}</p>

        <h3>Tracks:</h3>
        <ul>
            @forelse($album->tracks as $track)
                <li>{{ $track->title }} ({{ $track->duration }} secs)</li>
            @empty
                <p>No tracks added to this album.</p>
            @endforelse
        </ul>

        <a href="{{ route('albums.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
@endsection
