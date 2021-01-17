
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/output.css')}}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>


</head>
<body class="bg-gray-100">
