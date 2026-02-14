<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel')</title>

   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<header>
    <h2>My Third Laravel Site</h2>
</header>

<div class="content">
    @yield('content')
</div>

<footer>
    © {{ date('Y') }}
</footer>

</body>
</html>
