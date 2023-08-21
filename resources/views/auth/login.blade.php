
@extends('layout')

@section('title')Авторизация@endsection

@section('main_contect')
<div class="container my-3">
<h1 class="h3 mb-3 text-center">Авторизация</h1>
   <div class="col-sm-6 mx-auto">
<form method="POST" action="/login">
    @csrf   
    <div class="mb-3">
      <input type="text" class="form-control" name="name" placeholder="Имя">
    </div>
    <div class="mb-3">
      <input type="email" class="form-control" name="email" placeholder="E-mail">
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" name="password" placeholder="Пароль">
    </div>
    <button class="btn btn-dark w-100 py-2 " type="submit">Войти</button>
    </form>
   </div>
   </div>
   
   <div class="my-5 pt-5 text-body-secondary text-center container text-small">
    <p class="mb-1">© 2017–2023 Интерьерная галерея</p>
  </div>
@endsection