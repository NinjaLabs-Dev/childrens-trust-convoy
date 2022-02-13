<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Children's Trust Convoy | @yield('title')</title>

    <link rel="preload" href="{{ mix('css/app.css') }}" as="style">
    <link rel="preload" href="{{ mix('js/app.js') }}" as="script">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container-fluid" id="app">
        @include('_partials.navbar')

        <div class="page-container">
            @yield('content')
        </div>

        @include('_partials.footer')
    </div>
</body>

<script src="{{ mix('js/app.js') }}"></script>
@yield('scripts')
</html>
