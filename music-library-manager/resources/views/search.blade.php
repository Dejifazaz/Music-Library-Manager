@extends('layouts.spotify')

@section('title', 'Search')

@section('content')
    <h2 class="text-3xl font-bold mb-6">Search Music</h2>

    <div class="mb-6">
        <input
            type="text"
            placeholder="Search for songs, artists, or albums..."
            class="w-full p-3 rounded bg-gray-800 text-white placeholder-lightGray"
        />
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach(range(1, 8) as $i)
            <div class="bg-gray-800 rounded-lg p-4 hover:bg-gray-700 transition">
                <div class="h-40 bg-gray-700 rounded mb-4"></div>
                <h3 class="font-semibold text-lg">Result {{ $i }}</h3>
                <p class="text-sm text-lightGray">Search result description</p>
            </div>
        @endforeach
    </div>
@endsection
