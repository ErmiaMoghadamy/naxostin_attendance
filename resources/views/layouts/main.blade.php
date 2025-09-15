<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> NaXostin Attendace </title>
    <script src="/assets/js/color-modes.js"></script>
    <meta name="theme-color" content="#712cf9" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/dashboard.css"  />
</head>

<body>
    <x-toggle-theme />

    <div class="fixed-top p-3 bg-dark text-light shadow">
        <h2 class="text-center fs-3">
            NaXostin Attendace
        </h2>
    </div>
    <div class="container">
        @yield(section: 'content')
    </div>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/dashboard.js"></script>

</body>

</html>