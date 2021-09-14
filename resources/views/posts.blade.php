@extends('layouts.main')

@section('container')
    <article class="mt-3">
        @foreach ($post as $data)
            <h1>{{ $data->title }}</h1>
            <a href="/posts/{{ $data->slug }}">detail</a>
            <p>{{ $data->excerpt }}</p>
        @endforeach
    </article>
@endsection
