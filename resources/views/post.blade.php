@extends('layouts.main')

@section('mainContent')
    <p>Anda berada di Halaman {{ $pageTitle }}.</p>
    <hr>

    <h3>{{ $post['postTitle'] }}</h3>
    <small>Created at {{ $post['postDate'] }}</small>
    <p>{{ $post['postDescription'] }}</p>

    <a href="/posts">Back</a>
@endsection
