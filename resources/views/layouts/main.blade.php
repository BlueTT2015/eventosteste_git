<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <!-- Fonts -->
    <link rel="stylesheet" href="/styles/styles.css">
</head>

<body>
<header>
    <topnav><a href="/"><img src="/img/bambi_title.png" width="75" height="30" alt="bambi_img"></a>
       @auth <a href="/events"> Eventos </a> | <a href="/events/create"> Adicionar Eventos @endauth </a> @guest| <a href="/login"> Login </a> | <a href="/register"> Registar </a> @endguest |  <a href="/contacts"> Contacts </a> </topnav>
</header>

@yield('content')

</body>

<footer>
    <p> LINF | PW | Aulas de Programação | &copy; 2025 </p>
</footer>
</html>
