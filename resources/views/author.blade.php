@extends('layouts.main')

@section('container')
    <article class="mt-3 ">
        @foreach ($posts as $data)

            <a href="/posts/{{ $data->slug }}">
                <h1>{{ $data->title }}</h1>
            </a>

            <p>By.
                <a href="/author/{{ $data->author->username }}">{{ $data->author->name }}</a>
                , Category :
                <a href="/categories/{{ $data->category->slug }}">{{ $data->category->name }}</a>
            </p>

            <p>{{ $data->excerpt }}</p>

            <a href="/posts/{{ $data->slug }}">Read more...</a>
            <hr>
        @endforeach
    </article>
@endsection
