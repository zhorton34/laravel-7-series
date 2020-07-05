@extends('layout.app')


@section('content')
    <div style="padding:10%">
        @forelse($posts as $post)
            @if ($loop->first)
                <h1>Posts</h1>
                <hr>
            @endif
            <div style="padding:10px; border-left: 2px solid @if ($loop->even) red @else #333 @endif">
                <a href="/posts/{{ $post->id }}">
                    <small>Post {{ $loop->iteration }} of {{ $loop->count }}</small>
                    <h3>{{ $post->title }}</h3>
                </a>
                <p>
                    {{ Str::of($post->content)->limit(100, '...') }}
                </p>
            </div>
        @empty
            No posts to show
        @endforelse
    </div>
@endsection
