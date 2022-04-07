@extends('template.master')

@section('body')
<div class="jumbotron">
  <div class="landing-desc">
    <div class="col-md-4 col-12">
      <h1>Enjoy Your</h1>
      <h1>Vacation With Us</h1>
      <p>Ac urna lectus scelerisque est ut ut senectus iaculis. Dignissim vitae sapien et, rhoncus nisl, aenean ullamcorper. Ipsum massa in lacus, tristique vel sed tortor euismod sed. Placerat consectetur sit gravida tortor et, amet. </p>
      <div class="d-flex my-2">
        <a href="/event">
          <button class="btn btn-primary me-2 px-5">Event</button>
        </a>
        <button class="btn btn-primary me-2 px-5">City</button>
        <button class="btn btn-primary me-2"><i class="bi bi-search"></i></button>
      </div>
      <a href="#"> <b>Get a one-pack trip</b> </a>
    </div>
  </div>
</div>

<section id="EVENT">
  <div class="product-list container py-5 ">
    <h2 class="text-center">Event</h2>
    <div class="row pb-5 my-5">
      @for ($i=0; $i<6; $i++) <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <img src="./assets/img/jakarta.png" alt="" class="img-fluid d-block">
          <div class="card-body">
            <h5> <a href="#" class="text-dark"></a>Monas Indonesia</h5>
            <p class="small text-muted font-italic">Starting from</p>
            <p><b>Rp 25.000</b></p>
            <p class="icon-item"><i class="bi bi-calendar"></i> dummy</p>
            <p class="icon-item"><i class="bi bi-clock"></i> dummy</p>
            <p class="icon-item"><i class="bi bi-geo-alt"></i> dummy</p>
            <a class="stretched-link" href="/detailEvent"></a>
          </div>
        </div>
    </div>
    @endfor
  </div>
  </div>
</section>



<section id="TOURIST_SPOT">
  <div class="product-list container py-5 ">
    <h2 class="text-center">Tourist Spot</h2>
    <div class="row pb-5 my-5">
      @for ($i=0; $i<6; $i++) <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <img src="./assets/img/jakarta.png" alt="" class="img-fluid d-block">
          <div class="card-body">
            <h5> <a href="#" class="text-dark"></a>Monas Indonesia</h5>
            <p class="small text-muted font-italic">Starting from</p>
            <p><b>Rp 25.000</b></p>
            <p class="icon-item"><i class="bi bi-calendar"></i> dummy</p>
            <p class="icon-item"><i class="bi bi-clock"></i> dummy</p>
            <p class="icon-item"><i class="bi bi-geo-alt"></i> dummy</p>
            <a class="stretched-link" href="/detailEvent"></a>
          </div>
        </div>
    </div>
    @endfor
  </div>
  </div>
</section>



<div class="product-list container py-5 ">
  <h2 class="text-center">Viral Place</h2>
  <div class="row pb-5 my-5">
    @for ($i=0; $i<6; $i++) <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 mb-lg-0">
      <!-- Card-->
      <div class="card rounded shadow-sm border-0">
        <img src="./assets/img/jakarta.png" alt="" class="img-fluid d-block">
        <div class="card-body">
          <h5> <a href="#" class="text-dark"></a>Monas Indonesia</h5>
          <p class="small text-muted font-italic">Starting from</p>
          <p><b>Rp 25.000</b></p>
          <p class="icon-item"><i class="bi bi-calendar"></i> dummy</p>
          <p class="icon-item"><i class="bi bi-clock"></i> dummy</p>
          <p class="icon-item"><i class="bi bi-geo-alt"></i> dummy</p>
          <a class="stretched-link" href="/detailEvent"></a>
        </div>
      </div>
  </div>
  @endfor
</div>
</div>
@endsection