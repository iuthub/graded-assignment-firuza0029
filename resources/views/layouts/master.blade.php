<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{URL::to('../style.css')}}">
    </head>
    <body>
       @include('blog.index')
       @yield('content')
       @section('content')
       @include('blog.edition')
       @endsection
    </body>
</html>
