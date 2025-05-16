<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    {{-- Importo SCSS --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    @include('partials.header')
    @yield('main')
    @include('partials.footer')
</body>
</html>