@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Albums</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->title }}</td>
                    <td>{{ $album->artist }}</td>
                    <td>
                        <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('albums.destroy', $album->id) }}" method="POST" style="display:inline;">
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
            {{ $albums->links() }} <!-- Pagination links -->
        </div>
    </div>
@endsection
