<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}" />
    <title>Lojas | Dashboard</title>
</head>
<body>
    @include('layouts.nav')
    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
</body>
</html>