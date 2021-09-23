@extends('layouts.main')

@section('container')
    <article class="mt-3">
        <h1>Post Category : {{ $title }}</h1>
        <hr class="mb-5">
        @foreach ($posts as $data)
            <h3><a href="/posts/{{ $data->slug }}">{{ $data->title }}</a></h3>
            <p>{{ $data->excerpt }}</p>
        @endforeach
    </article>
@endsection
