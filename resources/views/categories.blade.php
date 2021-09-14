@extends('layouts.main')

@section('container')
    <h1>Post Categories</h1>
    <article class="mt-3">
        @foreach ($categories as $data)
            <h4><a href="/categories/{{ $data->slug }}">{{ $data->name }}</a></h4>
    </article>
    @endforeach
@endsection
