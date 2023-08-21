<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-danger text-white">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Интерьерная галерея</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/home">Главная</a>
        <a class="p-2 text-white" href="/about">Про нас</a>
        <a class="p-2 text-white" href="/register">Регистрация</a>
        <a class="p-2 text-white" href="/login">Вход</a>
      </nav>
    </div>
<div class="container">
    @yield('main_contect')
</div>


</body>
</html>