@extends('base')

@section('title', 'Posts Backend')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">
            Posts Backend
        </h1>

        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Create New</a>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col" colspan="2">&nbsp</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>

                    <td>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-muted text-center"><em>No posts were found.</em></td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection