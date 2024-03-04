@extends('layouts.main')

@section('main-content')
    <p>Anda berada di Halaman {{ $page_title }}.</p>
    <hr>

    <h3>{{ $post['post_title'] }}</h3>
    <small>Created at {{ $post['post_date'] }}</small>
    <p>{{ $post['post_description'] }}</p>

    <a href="/posts">Back</a>
@endsection
