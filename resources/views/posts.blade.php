@extends('layouts.main')

@section('main-content')
    <p>Anda berada di Halaman {{ $page_title }}.</p>
    <hr>
    @foreach ($posts as $post)
        <h3><a href="/posts/{{ $post['post_id'] }}">{{ $post['post_title'] }}</a></h3>
        <small>Created at {{ $post['post_date'] }}</small>
        <p>{{ $post['post_description'] }}</p>
        <hr>
    @endforeach
@endsection
