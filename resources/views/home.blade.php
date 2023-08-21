@extends('layout')

@section('title')Главная страница@endsection

@section('main_contect')
<main role="main">
<div class="p-5 mb-4 bg-body-tertiary rounded-3 border border-white">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-dark">Дизайнерские решения от профессиональных проектировщиков</h1>
        <p class="col-md-8 fs-4">Если ты очень хочешь переделать свою квартиру или дом, то регистрируйся на нашем сайте!</p>
        <button class="btn btn-dark btn-lg" type="button" href="/register" >Регистрация</button>
      </div>
    </div>
    
    <div class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Наши работы</h1>
      </div>
    </div>
    </div>
    
    
    <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://northcliffe.ru/wp-content/uploads/0/f/0/0f0706ec8e06a1aa2c62881f1200f10c.jpeg" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text text-dark fs-4">Комфортные и раслабляющие зоны отдыха!</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://mykaleidoscope.ru/uploads/posts/2020-02/1582560088_34-p-sovremennie-resheniya-v-dizaine-khrushchev-60.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text text-dark fs-4">Красивые и современные гостиные.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://mykaleidoscope.ru/uploads/posts/2020-03/1583864323_7-p-neobichnii-dizain-mebeli-v-intererakh-10.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text text-dark fs-4">Мебель и аксессуары необычной формы.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://krot.info/uploads/posts/2022-02/1644579339_34-krot-info-p-dizainerskie-resheniya-dlya-kukhni-35.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text text-dark fs-4">Ремонт подходит для разных кухонь, хоть она маленькая или большая!</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://pro-dachnikov.com/uploads/posts/2021-10/1633762433_138-p-dizainerskie-resheniya-dlya-gostinoi-foto-139.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text text-dark fs-4">Удобные и комфортные гостиные. </p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://pro-dachnikov.com/uploads/posts/2021-10/1633722177_63-p-dizainerskie-resheniya-v-interere-foto-65.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <p class="card-text text-dark fs-4">Яркие и красивые столовые.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>

       
    <div class="container marketing grid gap-3">
    
    <div class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Отзывы</h1>
      </div>
    </div>
    </div>

    <div class="row mb-2">

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mw-100 ">
        <div class="col p-4 d-flex flex-column position-static text-center ">
          <strong class="d-inline-block mb-2 text-primary-emphasis text-dark">Отзыв №76588</strong>
          <h3 class="mb-0">Иван Хрусталёв</h3>
          <div class="mb-1 text-body-secondary">7 февраля 2023 года</div>
          <p class="card-text mb-auto text-dark">Это самый лучший интернет-магазин дизайнрских решений. С этим магазином я сделал ремонт по всей квартире.</p>
            <img src="https://telegra.ph/file/c77c5b0471c5a590d8371.jpg" class="card-img-top" alt="">
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mw-100 ">
        <div class="col p-4 d-flex flex-column position-static text-center ">
          <strong class="d-inline-block mb-2 text-success-emphasis text-dark">Отзыв №68987</strong>
          <h3 class="mb-0">Василина Митяева</h3>
          <div class="mb-1 text-body-secondary">11 августа 2022 года</div>
          <p class="card-text mb-auto text-dark">С этим интернет-магазином мой дом стал ярче, красивее и современнее.</p>
            <img src="http://s2.hostingkartinok.com/uploads/images/2012/08/2790384aa7f4fdef283a602b8d99f325.jpg" class="card-img-top" alt="">
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">   
        </div>
      </div>
    </div>
  </div>

        <div class="my-5 pt-5 text-body-secondary text-center container text-small">
    <p class="mb-1">© 2017–2023 Интерьерная галерея</p>
  </div>
@endsection