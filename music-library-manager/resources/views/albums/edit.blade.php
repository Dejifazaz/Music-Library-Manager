@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Album</h1>

    <form method="POST" action="{{ route('albums.update', $album) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Title:</label>
            <input name="title" class="border p-2" value="{{ $album->title }}" required>
        </div>

        <div>
            <label>Artist:</label>
            <input name="artist" class="border p-2" value="{{ $album->artist }}" required>
        </div>

        <div>
            <label>Release Date:</label>
            <input type="date" name="release_date" class="border p-2" value="{{ $album->release_date }}" required>
        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Update</button>
    </form>
@endsection
