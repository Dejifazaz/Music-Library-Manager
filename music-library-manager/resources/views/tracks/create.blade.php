@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Track</h1>

    <form method="POST" action="{{ route('tracks.store') }}">
        @csrf
        <div class="mb-4">
            <label>Title:</label>
            <input name="title" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label>Duration (mins):</label>
            <input name="duration" type="number" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label>Album:</label>
            <select name="album_id" class="border p-2 w-full">
                @foreach ($albums as $album)
                    <option value="{{ $album->id }}">{{ $album->title }}</option>
                @endforeach
            </select>
        </div>

        <button class="bg-green-500 text-white px-4 py-2 rounded">Save Track</button>
    </form>
@endsection
