@extends('base')

@section('title', 'Posts')

@section('content')
    <div class="container mt-4">
        <h1>{{ $post->title }}</h1>
        <p class="lead mb-4 text-muted">by {{ $post->user->name }} &commat; {{ $post->created_at->format("F d, Y - H:i") }}</p>

        <div class="card mb-2">
            <div class="card-body">
                @if($post->iframe)
                <div class="embed-responsive embed-responsive-16by9">
                {!! $post->iframe !!}
                </div>
                @elseif($post->image)
                <img src="{{ $post->imageurl }}" class="card-img-top">
                @endif

                <p class="card-text">
                    {!! nl2br($post->body) !!}
                </p>
            </div>
        </div>
    </div>
@endsection