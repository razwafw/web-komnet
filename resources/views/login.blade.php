@extends('layouts.main')

@section('mainContent')
    <p>Anda berada di Halaman {{ $pageTitle }}.</p>

    <form action="/login/authenticate-user" method="post">
        @csrf
        <div class="mb-3">
            <label for="usernameInput" class="form-label">Username</label>
            <input type="text" class="form-control" id="usernameInput" name="username">
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordInput" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
