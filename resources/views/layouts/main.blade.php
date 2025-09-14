<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> NaXostin Attendace </title>

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            @yield(section: 'content')
        </div>
        <script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>
