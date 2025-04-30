<!-- resources/views/albums/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Albums</h1>
        <a href="{{ route('albums.create') }}" class="btn btn-primary">Create New Album</a>
        <ul>
            @foreach($albums as $album)
                <li>
                    {{ $album->title }} by {{ $album->artist }}
                    <a href="{{ route('albums.edit', $album) }}">Edit</a>
                    <form action="{{ route('albums.destroy', $album) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
