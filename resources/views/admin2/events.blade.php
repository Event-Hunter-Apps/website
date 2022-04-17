@extends('admin2.sidebar')

@section('title')
<title>Dashboard - Events</title>
@endsection

@section('list')

<title>Dashboard - Events</title>

<div class="row mb-4 pb-5 mx-3">
  <div class="d-flex justify-content-between">
    <a href="/admin/events/create"><button class="btn btn-primary mb-4">Create Event</button></a>
    @if(session()->has('msg'))
    <div class="alert alert-success" role="alert">{{ session('msg') }}</div>
    @endif
  </div>
  @if(isset($events))
  @foreach ($events as $event)
  <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 mb-lg-0">
    <!-- Card-->
    <div class="card rounded shadow-sm border-0 mb-4">
      <img src="{{$event->imageUrl}}" alt="" class="img-fluid d-block" style="height: 250px;">
      <div class="card-body">
        <h5> <a href="#" class="text-dark"></a>{{$event->nama}}</h5>
        <p class="small text-muted font-italic">Starting from</p>
        <p><b>Rp {{$event->idrPrice}}</b></p>
        <p class="icon-item"><i class="bi bi-calendar"></i> {{$event->tanggal_mulai}}</p>
        <p class="icon-item"><i class="bi bi-clock"></i> {{$event->jam_buka}} - {{$event->jam_tutup}}</p>
        <p class="icon-item"><i class="bi bi-geo-alt"></i> {{$event->lokasi}}</p>
      </div>
      <a class="stretched-link" href="/admin/events/{{$event->id}}/edit"></a>
    </div>
  </div>
  @endforeach

  @endif
</div>

@endsection