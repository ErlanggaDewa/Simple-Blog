@extends('layouts.main')

@section('container')
    <article class="mt-3">
        <h1>{{ $post->title }}</h1>

        <p>By.
            <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>
            , Category :
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <p>{!! $post->body !!}</p>
        <a href="/posts">kembali</a>
    </article>
@endsection
