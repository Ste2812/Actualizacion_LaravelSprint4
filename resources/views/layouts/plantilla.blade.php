<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>

    <style>
        .image{
            background-image: url("{{asset('img/fondoApp.jpg')}}");
        }
        .active{
            color: red;
            font-weight: bold;
        }

    </style>
</head>

<body class="image bg-cover">


    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')


</body>
</html>
