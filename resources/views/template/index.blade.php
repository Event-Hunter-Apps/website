<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Hello, world!</title>
  </head>

  <body>
    <!-- Navbar -->

    <nav class="shadow navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="https://media.discordapp.net/attachments/947504606454353961/955881757662666772/Logo.png"
            alt=""
            height="40"
            class="d-inline-block"
          />
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tourist Spot</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-4">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-ticket-fill"
                  viewBox="0 0 16 16"
                  style="color: #57c2b8"
                >
                  <path
                    d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13Z"
                  />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                  class="rounded-circle"
                  style="width: 23px"
                  alt="Avatar"
                />
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-search"
                  viewBox="0 0 16 16"
                  style="color: #57c2b8"
                >
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Akhir Navbar -->

    <!-- Content -->

    <section class="content">
      <div class="container">
        <div class="row justify-content-center mb-2">
          <div class="col-1">
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="35"
                fill="currentColor"
                class="bi bi-arrow-left"
                viewBox="0 0 16 16"
                style="color: #57c2b8; width: 150px"
              >
                <path
                  fill-rule="evenodd"
                  d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"
                />
              </svg>
            </a>
          </div>
          <div class="col-9">
            <h3>Pilih Kategori</h3>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-4">
            <div
              class="card mb-3 img-thumbnail shadow"
              style="max-width: 540px; border-radius: 20px"
            >
              <div class="row g-0">
                <div class="col-3">
                  <img
                    src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F1.bp.blogspot.com%2F-O8m7EbFkipo%2FTcdcB_GxaKI%2FAAAAAAAAADA%2F1BEBXq0g20o%2Fs1600%2Fmonas.jpg&f=1&nofb=1"
                    class="img-responsive"
                    alt="Gambar Wisata"
                    style="border-radius: 20px"
                  />
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
                      <a href="#">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-chevron-right"
                          viewBox="0 0 16 16"
                          style="color: #57c2b8"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                          />
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
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-chevron-right"
                          viewBox="0 0 16 16"
                          style="color: #57c2b8"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                          />
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
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-chevron-right"
                          viewBox="0 0 16 16"
                          style="color: #57c2b8"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                          />
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
