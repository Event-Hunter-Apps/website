@extends('template.master')

@section('body')
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link active align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-people-fill"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-cart"></i> <span class="ms-1 d-none d-sm-inline">Events</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-building"></i> <span class="ms-1 d-none d-sm-inline">Cities</span>
                        </a>
                    </li>
                    
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
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
        </div>
    </div>
</div>

@endsection