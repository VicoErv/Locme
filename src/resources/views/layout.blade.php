<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locme</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @yield('content')
    <script src="{{ mix('js/locme.js') }}"></script>
</body>
</html>