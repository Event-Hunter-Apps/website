@extends('template.master')

@section('body')
<!-- Content -->
<section class="content">
  <div class="container">
    <div class="row justify-content-center mb-2">
      <div class="col-1">
        <a href="#" onclick="history.go(-1)">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" style="color: #57c2b8; width: 150px">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
          </svg>
        </a>
      </div>
      <div class="col-9">
        <h3>Pilih Kategori</h3>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-4">
        <div class="card mb-3 img-thumbnail shadow" style="max-width: 540px; border-radius: 20px">
          <div class="row g-0">
            <div class="col-3">
              <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F1.bp.blogspot.com%2F-O8m7EbFkipo%2FTcdcB_GxaKI%2FAAAAAAAAADA%2F1BEBXq0g20o%2Fs1600%2Fmonas.jpg&f=1&nofb=1" class="img-responsive" alt="Gambar Wisata" style="border-radius: 20px" />
            </div>
            <div class="col-9">
              <div class="card-body">
                <h5 class="card-title">Monas Jakarta</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="rounded-1">
          <ul class="list-group">
            <li class="list-group-item" id="list-item">
              <div class="row">
                <p class="col">First item</p>
                <p class="col-2">Harga</p>
              </div>
              <div class="row">
                <p class="col"></p>
                <p class="col-1">
                  <a href="/cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #57c2b8">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                  </a>
                </p>
              </div>
            </li>
            <li class="list-group-item" id="list-item">
              <div class="row">
                <p class="col">Second item</p>
                <p class="col-2">Harga</p>
              </div>
              <div class="row">
                <p class="col"></p>
                <p class="col-1">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #57c2b8">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                  </a>
                </p>
              </div>
            </li>
            <li class="list-group-item" id="list-item">
              <div class="row">
                <p class="col">Third item</p>
                <p class="col-2">Harga</p>
              </div>
              <div class="row">
                <p class="col"></p>
                <p class="col-1">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="color: #57c2b8">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                  </a>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Akhir Content -->

@endsection