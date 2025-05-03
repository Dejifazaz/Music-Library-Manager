@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $album->title }}</h1>
        <p><strong>Artist:</strong> {{ $album->artist }}</p>
        <h3>Tracks:</h3>
        <ul>
            @foreach($album->tracks as $track)
                <li>{{ $track->title }} - {{ $track->duration }} sec</li>
            @endforeach
        </ul>
    </div>
@endsection
