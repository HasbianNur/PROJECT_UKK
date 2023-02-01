<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/index.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css'); }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    @include('template.navbar')
    @include('template.sidebar')
    @yield('content')

    <script src="{{ URL::asset('js/index.js'); }}"></script>
</body>
</html>
