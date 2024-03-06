@extends('layouts.main')

@section('mainContent')
    <p>Anda berada di Halaman {{ $pageTitle }}.</p>
    <hr>
    @foreach ($posts as $post)
        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
        <small>Created at {{ $post->created_at }}</small>
        <small>Updated at {{ $post->updated_at }}</small>
        <p>{{ $post->description }}</p>
        <hr>
    @endforeach
@endsection
