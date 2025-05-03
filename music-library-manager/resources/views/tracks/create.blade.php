@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Track</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tracks.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Track Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="duration">Duration (in seconds)</label>
                <input type="number" name="duration" id="duration" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="album_id">Album</label>
                <select name="album_id" id="album_id" class="form-control" required>
                    @foreach($albums as $album)
                        <option value="{{ $album->id }}">{{ $album->title }} - {{ $album->artist }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create Track</button>
        </form>
    </div>
@endsection
