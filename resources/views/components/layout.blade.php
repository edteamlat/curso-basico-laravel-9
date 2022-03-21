<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Blog de Jairo</title>
    <link rel="stylesheet" href="/css/app.css">
    {{-- <link rel="stylesheet" href="/css/bootstrap.css"> --}}
    {{-- <script src="/js/app.js"></script> --}}
</head>
<body>

    <x-navbar></x-navbar>

    {{ $slot }}

    <x-footer></x-footer>

</body>
</html>
