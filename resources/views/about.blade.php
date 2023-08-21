@extends('layout')

@section('title')Страница о нас@endsection

@section('main_contect')
<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary  border border-white">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic text-dark">О НАС</h1>
      <p class="lead my-3">Наша компания создалась совсем недавно, в каком-то 2017 году и с этого года до данного момента мы приняли около 400000 заказов.</p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis text-dark">Наш офис</strong>
          <h3 class="mb-0">город Москва</h3>
          <p class="card-text mb-auto text-dark">Этот офис - самый главный, в нём проектировщики и дизайнеры выполняют ваш заказ, а точнее придумывают искизы.</p>
          <img src="https://static.tildacdn.com/tild6337-3434-4266-a536-653762306561/G55G5107_8_9.jpg" class="card-img-top" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis text-dark">Наши соцсети</strong>
          <h3 class="mb-0">GitHub</h3>
          <p class="mb-auto text-dark">https://github.com/katemtn</p>
          <img src="https://технический-план.москва/wp-content/uploads/2-7.jpg" class="card-img-top" alt="">
        </div>
    </div>
  </div>

  <div class="my-5 pt-5 text-body-secondary text-center container text-small">
    <p class="mb-1">© 2017–2023 Интерьерная галерея</p>
  </div>
@endsection