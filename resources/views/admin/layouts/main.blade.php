<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>DEV IDEAS</title>
</head>
<body>

    <header>
        <h1>Share your ideas!</h1>
        <a class="header-button" href="{{route('register')}}">+ Add</a>
    </header>
    <main class="container-cards">
        @yield('main-content')
    </main>

</body>
</html>
