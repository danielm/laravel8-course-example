@extends('base')

@section('title', 'Posts')

@section('content')
    <div class="container mt-4">
        <h1>Posts</h1>
        <p class="lead mb-4">Recent Posts lists.</p>

        @forelse($posts as $post)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">
                        {{ $post->exceprt }}
                    </p>
                    <a href="{{ route('post', $post) }}" class="btn btn-primary">Read Article</a>
                    <p class="text-muted mb-0 mt-3">
                        <em>by {{ $post->user->name }} &commat; {{ $post->created_at->format("F d, Y - H:i") }} </em>
                    </p>
                </div>
            </div>
        @empty
        <p>
            No posts were found.
        </p>
        @endforelse

        {{ $posts->links('pagination::bootstrap-4') }}
        
    </div>
@endsection