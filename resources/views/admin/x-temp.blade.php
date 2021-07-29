<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Control Panel</title>
</head>
<body>
    <header></header>
    <main class="bg-gray-100 min-h-screen">
        @yield('content')
    </main>
    <footer></footer>
</body>
</html>