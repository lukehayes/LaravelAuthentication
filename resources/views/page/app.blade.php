<html>
    <head>
        <title>App Name - @yield('title')</title>

        @vite('resources/css/app.css')
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css"> -->
    </head>
    <body>
        @yield('content')
    </body>
</html>
