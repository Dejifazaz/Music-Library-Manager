@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Track</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tracks.update', $track->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="title">Track Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $track->title) }}" required>
            </div>

            <div class="form-group">
                <label for="duration">Duration (in seconds)</label>
                <input type="number" name="duration" id="duration" class="form-control" value="{{ old('duration', $track->duration) }}" required>
            </div>

            <div class="form-group">
                <label for="album_id">Album</label>
                <select name="album_id" id="album_id" class="form-control" required>
                    @foreach($albums as $album)
                        <option value="{{ $album->id }}" {{ $album->id == $track->album_id ? 'selected' : '' }}>
                            {{ $album->title }} - {{ $album->artist }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Track</button>
        </form>
    </div>
@endsection
