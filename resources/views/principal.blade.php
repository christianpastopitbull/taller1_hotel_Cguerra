@extends('layouts.master')
@section('content')
       principal
       <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.sophiahotel.com.co/cache/49/ae/49aed65591f5a7309f617399b232cf91.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HOTEL LA RIVERA</h5>
        <p>El Mejor Hotel de la Ciudad. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.sophiahotel.com.co/cache/ae/38/ae388744ecd16053c2b891129e6e6b5f.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HOTEL LA RIVERA</h5>
        <p>Los Mejores Precios Para Nuestros Clientes.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.sophiahotel.com.co/cache/19/8a/198adeced5f4c5e5dcd2f6eddeeca9b4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HOTEL LA RIVERA</h5>
        <p>Excelente Vista Desde Cualquier Habitacion.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop