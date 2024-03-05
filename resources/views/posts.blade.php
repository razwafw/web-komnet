@extends('layouts.main')

@section('mainContent')
    <p>Anda berada di Halaman {{ $pageTitle }}.</p>
    <hr>
    @foreach ($posts as $post)
        <h3><a href="/posts/{{ $post['postId'] }}">{{ $post['postTitle'] }}</a></h3>
        <small>Created at {{ $post['postDate'] }}</small>
        <p>{{ $post['postDescription'] }}</p>
        <hr>
    @endforeach
@endsection
