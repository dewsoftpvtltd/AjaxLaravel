<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Ajax</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">

    </head>
    <body>
        @include('shared.nav')
        <section id="content" class="container-fluid">
            @yield('content')
        </section>
        @include('shared.modal')
        <script type="text/javascript" src='/js/3rd-party.js'></script>
        <script type="text/javascript" src='/js/app.js'></script>
    </body>
</html>
