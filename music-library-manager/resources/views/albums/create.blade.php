<!-- resources/views/albums/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a New Album</h1>

        <form action="{{ route('albums.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Album Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="artist" class="form-label">Artist</label>
                <input type="text" class="form-control" id="artist" name="artist" required>
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">Release Date</label>
                <input type="date" class="form-control" id="release_date" name="release_date" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Album</button>
        </form>
    </div>
@endsection
