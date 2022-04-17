@extends('template.master')
<title>Dashboard</title>
<link rel="icon" href="{{asset('assets/img/1.png')}}"/>
@section('body')
<section id="landing">
  <div class="container-fluid px-0 top-banner">
    <div class="container">
      <div class="content">
        <div class="col-lg-5 col-md-6 ">
          <div class="h1">
            Enjoy Your 
          </div>

          <div class="h1">
            Vacation With Us
          </div>
          <p style=" font-family:poppins;">Book a ticket for the tour you want to go now. Because queuing just to buy tickets sucks. You can spend your time on vacation instead of queuing to buy tickets</p>
          <div class="d-flex">
            <a href="#EVENT">
              <button class="btn btn-light me-2 px-5">
                Event
              </button>
            </a>
          </div>
        </div>
        <div class="imgBox position-relative">
          <img src="assets/img/landing.png" class="img-fluid position-static" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="EVENT">
  <div class="product-list container py-5 ">
    <div class="h2 text-center" style="color:#32B0C7"> Event</div>
    <div class="owl-carousel owl-theme pb-5 my-5">
      @if(isset($events))
      @foreach ($events as $event)
      <div>
        <!-- Card-->
        <div class="card rounded shadow-sm border-0 mb-4">
          <img src="{{$event->imageUrl}}" alt="" class="img-fluid d-block">
          <div class="card-body">
            <h5> <a href="#" class="text-dark"></a>{{$event->nama}}</h5>
            <p class="small text-muted font-italic">Starting from</p>
            <p><b>Rp {{$event->harga}}</b></p>
            <p class="icon-item"><i class="bi bi-calendar"></i> {{$event->tanggal_mulai}}</p>
            <p class="icon-item"><i class="bi bi-clock"></i> {{$event->jam_buka}} - {{$event->jam_tutup}}</p>
            <p class="icon-item"><i class="bi bi-geo-alt"></i> {{$event->kota}}</p>
          </div>
          <a class="stretched-link" href="/events/{{$event->id}}"></a>
        </div>
      </div>
      @endforeach
      @endif
    </div>
</section>


@endsection