<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/register.css">
    <title>DEV IDEAS</title>
</head>
<body>

    <header>
        <h1>Register your idea</h1>
        <a class="header-button" href="{{route('cards')}}">Voltar</a>
    </header>
    <main class="register">
        @yield('register-content')
    </main>

</body>
</html>
