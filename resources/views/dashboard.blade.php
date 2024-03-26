@extends('layouts.main')

@section('mainContent')
    <p>Anda berada di Halaman {{ $pageTitle }}.</p>
    <p>Selamat datang, {{ auth()->user()->username }}!</p>
    <form action="/logout" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
