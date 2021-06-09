<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
<header>
  <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>
<main>
     @yield('content')
</main>
<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>

</body>
</html>

