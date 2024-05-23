<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('header')

    <!-- Sidebar -->
    <div class="w-64 h-full shadow-md bg-white absolute">
        <ul class="list-reset">

        </ul>
    </div>

    <!-- Main Content -->

    <div style="min-height: 80vh;">
        @yield('content')
    </div>

    @include('footer')
</body>

</html>