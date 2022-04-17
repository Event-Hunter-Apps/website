@extends('template.master')

@section('body')

<!-- Navbar -->



<!-- Akhir Navbar -->

<!-- Content -->

<section class="content">

  <div class="container">
    <!-- Back button dan Teks Promo -->
    <div class="row justify-content-center mb-2">
      <div class="col-1">
        <a href="#" onclick="history.go(-1)">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" style="color: #57c2b8; width: 150px">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
          </svg>
        </a>
      </div>
      <div class="col-9">
        <h3>{{isset($event)?$event->nama:''}}</h3>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-8 mb-5">
        <div class="shadow ms-4 px-4 py-4">
          @if(isset($tikets))

          @foreach ($tikets as $tiket)
          <div class="mb-4 list-tile">
            <div class="row mb-2">
              <span class="col-9 fw-bold">[-] {{$tiket->nama}}</span>
              <span class="col-3 fw-bold">Rp {{$tiket->idrPrice}}</span>
            </div>
            <div class="row mb-2">
              <span class="col-9 fw-normal">
                {{$tiket->deskripsi}}</span>
            </div>
          </div>
          <hr>
          @endforeach
          @endif

          <!-- Akhir Bagian Event Detail -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Akhir Content -->

@endsection