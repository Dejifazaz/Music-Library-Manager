@extends('layouts.spotify')

@section('title', 'Library')

@section('content')
    <h2 class="text-3xl font-bold mb-6">Your Library</h2>
    <p class="text-lightGray mb-6">Here are your saved albums and tracks.</p>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach(range(1, 6) as $i)
            <div class="bg-gray-800 rounded-lg p-4 hover:bg-gray-700 transition">
                <div class="h-40 bg-gray-700 rounded mb-4"></div>
                <h3 class="font-semibold text-lg">Saved Item {{ $i }}</h3>
                <p class="text-sm text-lightGray">Track or Album</p>
            </div>
        @endforeach
    </div>
@endsection
