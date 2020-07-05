@extends('layout.app')


@section('content')
    @foreach ($posts as $post)
        <div style="padding:10px;margin-top:10px">
            <a href="/posts/{{ $post->id }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <p>
                {{ $post->content }}
            </p>
        </div>
    @endforeach
@endsection
