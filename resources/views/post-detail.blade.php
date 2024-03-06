@extends('layouts.main')

@section('mainContent')
    <p>Anda berada di Halaman {{ $pageTitle }}.</p>
    <hr>

    <h3>{{ $post->title }}</h3>
    <small>Created at {{ $post->created_at }}</small>
    <small>Updated at {{ $post->updated_at }}</small>
    <p>{{ $post->description }}</p>

    <a href="/posts">Back</a>
@endsection
