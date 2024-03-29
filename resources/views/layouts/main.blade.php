<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/c880a1b0f6.js" crossorigin="anonymous"></script>

    <title>Halaman {{ $pageTitle }}</title>
</head>

<body>
    {{-- Page Container --}}
    <div class="container-fluid m-0 p-0">
        {{-- Header --}}
        <div class="container-fluid m-0 p-0">
            @include('partials.header')
        </div>

        {{-- Main Content --}}
        <div class="container-fluid m-0 p-0">
            @yield('mainContent')
        </div>

        {{-- Footer --}}
        <div class="container-fluid m-0 p-0">
            @include('partials.footer')
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>
