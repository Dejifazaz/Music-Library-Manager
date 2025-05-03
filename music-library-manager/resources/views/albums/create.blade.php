@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Album</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('albums.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Album Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="artist">Artist</label>
                <input type="text" name="artist" id="artist" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create Album</button>
        </form>
    </div>
@endsection
