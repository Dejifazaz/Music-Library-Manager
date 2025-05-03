@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Album</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('albums.update', $album->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="title">Album Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $album->title) }}" required>
            </div>

            <div class="form-group">
                <label for="artist">Artist</label>
                <input type="text" name="artist" id="artist" class="form-control" value="{{ old('artist', $album->artist) }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Album</button>
        </form>
    </div>
@endsection
