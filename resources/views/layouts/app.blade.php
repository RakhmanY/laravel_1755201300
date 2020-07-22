<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='charset-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.navbar')
    <div class="container-fluid">
        <div class="row mt-1">
            <div class="col-md-2">
            @include('layouts.sidebar')
            </div>
            <div class="col-md-10">
            @include('layouts.breadcrumb')
            @yield('content')
            </div>
        </div>
    </div>
</body>
</html>