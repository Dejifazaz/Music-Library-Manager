@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Tracks</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Duration</th>
                <th>Album</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tracks as $track)
                <tr>
                    <td>{{ $track->title }}</td>
                    <td>{{ $track->duration }} seconds</td>
                    <td>{{ $track->album->title }} - {{ $track->album->artist }}</td>
                    <td>
                        <a href="{{ route('tracks.edit', $track->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tracks.destroy', $track->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $tracks->links() }} <!-- Pagination links -->
        </div>
    </div>
@endsection
