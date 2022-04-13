@extends('template.master')

@section('body')
<div class="container py-5 product-list">
  <div class="navbar justify-content-between">
 
    <h2>Tourist Spot {{isset($search)?$search->name:''}}</h2>
  
    <form class="form-inline d-flex filter" action="/events">
      <select name="sCity" class="form-select" aria-label="Default select example">
        <option selected>all city</option>

        @if(isset($cities))
        @foreach ($cities as $city)
        <option value="{{$city->name}}">{{$city->name}}</option>
        @endforeach
        @endif

      </select>
      <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
    </form>
  </div>

  <div class="row  mb-4 pb-5 my-5">
    @if(isset($events))

    @foreach ($events as $event) <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4 mb-lg-0">
      <!-- Card-->
      <div class="card rounded shadow-sm border-0 mb-4">
        <img src="{{asset('storage/'.$event->image)}}" alt="" class="img-fluid d-block">
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
  @endsection