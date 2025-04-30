@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tracks</h1>

    <a href="{{ route('tracks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded inline-block mb-4">Add New Track</a>

    <ul>
        @foreach ($tracks as $track)
            <li class="mb-2">
                <strong>{{ $track->title }}</strong> ({{ $track->duration }} mins)
                - Album: {{ $track->album->title ?? 'N/A' }}
                <a href="{{ route('tracks.edit', $track) }}" class="text-blue-600 ml-2">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
