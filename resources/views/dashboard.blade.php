<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="/dashboard">
</head>
<body class="bg-danger text-white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Интерьерная галерея</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/home">Выход</a>
      </nav>
    </div>
    
    <div class="container my-3">
<h1 class="h3 mb-3 text-center">Анкета</h1>
   <div class="col-sm-6 mx-auto">
<form method="POST" action="/ready">
    @csrf   
    <div class="mb-3">
      <input type="title" class="form-control" name="title" placeholder="Тема">
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" name="form" placeholder="Информация для дизайнерсого решения">
    </div>
    <button class="btn btn-dark w-100 py-2 " type="submit">Отправить анкету</button>
    </form>
   </div>
   </div>

<div class="my-5 pt-5 text-body-secondary text-center container text-small">
    <p class="mb-1">© 2017–2023 Интерьерная галерея</p>
  </div>
</body>
</html>

