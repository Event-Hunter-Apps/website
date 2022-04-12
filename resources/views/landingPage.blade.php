

@extends('template.master')

@section('body')

<div class="jumbotron top-banner">
  <div class="landing-desc">
    <div class="col-lg-5 ">
      <h1 > Enjoy Your</h1>
      <h1>Vacation With Us</h1>
      <p>Ac urna lectus scelerisque est ut ut senectus iaculis. Dignissim vitae sapien et, rhoncus nisl, aenean ullamcorper. Ipsum massa in lacus, tristique vel sed tortor euismod sed. Placerat consectetur sit gravida tortor et, amet. </p>
      <div class="d-flex my-2">
        <a href="/event">
          <button class="btn btn-light me-2 px-5">Event</button>
        </a>
        <button class="btn btn-light me-2 px-5">City</button>
        <button class="btn me-2 " style="background-color:#32B0C7; color:#ffffff"><i class="bi bi-search"></i></button>
      </div>
    </div>
  </div>
</div>





<section id="EVENT">
  <div class="product-list container py-5 ">
    <h2 class="text-center">Event</h2>
    <div class="owl-carousel owl-theme pb-5 my-5">
      @for ($i=0; $i<12; $i++) <div >
        <!-- Card-->
        <div class="card rounded shadow-sm border-0 mb-4">
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
</section>


<section id="TOURIST_SPOT">
  <div class="product-list container py-5 ">
    <h2 class="text-center">Tourist Spot</h2>
    <div class="owl-carousel owl-theme pb-5 my-5">
      @for ($i=0; $i<12; $i++) <div >
        <!-- Card-->
        <div class="card rounded shadow-sm border-0 mb-4">
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
</section>









@endsection