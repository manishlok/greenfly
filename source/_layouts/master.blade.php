<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

        <title>GreenFly Fashion </title>

        <meta name="description" content=" GreenFly Garments Pvt.Ltd. ">
        <meta name="keywords" content=" ">
        <meta name="author" content="Manish Sahu">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    </head>
    <body class="bg-light">
       @include('_partials.header')

        @yield('body')
        
        @include('_partials.subscribe')
        @include('_partials.footer')
    </body>
</html>