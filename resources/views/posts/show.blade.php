@extends('layout.app')


@section('content')
    <a href="/posts"><i class="fa fa-chevron-left"></i> All Posts</a>
    <br>
    <div style="padding:10px;margin-top:10px">
        <a href="/posts/{{ $post->id }}">
            <h2>{{ $post->title }}</h2>
        </a>
        <p>
            {{ $post->content }}
        </p>
    </div>
@endsection
