@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $track->title }}</h1>
        <p><strong>Duration:</strong> {{ $track->duration }} seconds</p>
        <p><strong>Album:</strong> {{ $track->album->title }} by {{ $track->album->artist }}</p>
    </div>
@endsection
