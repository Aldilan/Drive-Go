<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>{{ $title }}</title>
</head>

<body>
    <div class="container overflow-hidden pb-16">
        @include('partials.headerAdmin')
        @yield('contents')
        @auth('admin')
            @include('partials.bottomNavbarAdmin')
        @endauth
    </div>
</body>

<script src="js/indexAdmin.js"></script>

</html>
