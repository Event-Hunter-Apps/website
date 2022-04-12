@extends('admin2.sidebar')

@section('list')
<div class="row  mb-4 pb-5 my-5">
  @if(isset($events))

  @foreach ($events as $event) 
  <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 mb-lg-0">
    <!-- Card-->
    <div class="card rounded shadow-sm border-0 mb-4">
      <img src="./assets/img/jakarta.png" alt="" class="img-fluid d-block">
      <div class="card-body">
        <h5> <a href="#" class="text-dark"></a>{{$event->nama}}</h5>
        <p class="small text-muted font-italic">Starting from</p>
        <p><b>Rp {{$event->deskripsi}}</b></p>
        <p class="icon-item"><i class="bi bi-calendar"></i> {{$event->tanggal_mulai}}</p>
        <p class="icon-item"><i class="bi bi-clock"></i> {{$event->waktu_event}}</p>
        <p class="icon-item"><i class="bi bi-geo-alt"></i> {{$event->lokasi}}</p>
      </div>
      <a class="stretched-link" href=""></a>
    </div>
  </div>
  @endforeach
  
  @endif
</div>

@endsection