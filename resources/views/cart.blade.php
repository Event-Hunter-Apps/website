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

    <style type="text/css">
      .autohide {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
      }
      .scrolled-down {
        transform: translateY(-100%);
        transition: all 0.3s ease-in-out;
      }
      .scrolled-up {
        transform: translateY(0);
        transition: all 0.3s ease-in-out;
      }
    </style>
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function () {
        el_autohide = document.querySelector(".autohide");

        // add padding-top to bady (if necessary)
        navbar_height = document.querySelector(".navbar").offsetHeight;
        document.body.style.paddingTop = navbar_height + "px";

        if (el_autohide) {
          var last_scroll_top = 0;
          window.addEventListener("scroll", function () {
            let scroll_top = window.scrollY;
            if (scroll_top < last_scroll_top) {
              el_autohide.classList.remove("scrolled-down");
              el_autohide.classList.add("scrolled-up");
            } else {
              el_autohide.classList.remove("scrolled-up");
              el_autohide.classList.add("scrolled-down");
            }
            last_scroll_top = scroll_top;
          });
          // window.addEventListener
        }
        // if
      });
      // DOMContentLoaded  end
    </script>

    <title>Hello, world!</title>
  </head>

  <body>
    <!-- Navbar -->

    <nav class="autohide shadow navbar navbar-expand-lg navbar-light bg-light">
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
                  style="color: #0d6efd"
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
                  style="color: #0d6efd"
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
        <!-- Back button dan Teks Promo -->
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
                style="color: #0d6efd; width: 150px"
              >
                <path
                  fill-rule="evenodd"
                  d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"
                />
              </svg>
            </a>
          </div>
          <div class="col-9">
            <h3>Promo</h3>
          </div>
        </div>

        <div class="row justify-content-center">
          <!--  Bagian Event Detail -->

          <div class="col-8">
            <div class="shadow ms-4 px-4 py-4">
              <div class="mb-4 list-tile">
                <div class="row mb-2">
                  <span class="col-9 fw-bold">[Dummy] lorem ipsum</span>
                  <span class="col-3 fw-bold">Rp 85.000.000</span>
                </div>
                <div class="row mb-2">
                  <span class="col-9 fw-normal"
                    >Pellentesque duis at quis convallis nunc porttitor. Vivamus
                    in in maecenas tortor sed. Nam esss s s t.</span
                  >
                  <div class="row col-3">
                    <a
                      href="#"
                      class="col-4 mx-2 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: grey;
                        color: white;
                      "
                    >
                      <span>-</span>
                    </a>

                    <a
                      href="#"
                      class="col-4 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: #0d6efd;
                        color: white;
                      "
                    >
                      <span>+</span>
                    </a>

                    <span class="col-4 fw-bold">10</span>
                  </div>
                </div>
              </div>
              <div class="mb-4 list-tile">
                <div class="row mb-2">
                  <span class="col-9 fw-bold">[Dummy] lorem ipsum</span>
                  <span class="col-3 fw-bold">Rp 85.000.000</span>
                </div>
                <div class="row mb-2">
                  <span class="col-9 fw-normal"
                    >Pellentesque duis at quis convallis nunc porttitor. Vivamus
                    in in maecenas tortor sed. Nam esss s s t.</span
                  >
                  <div class="row col-3">
                    <a
                      href="#"
                      class="col-4 mx-2 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: grey;
                        color: white;
                      "
                    >
                      <span>-</span>
                    </a>

                    <a
                      href="#"
                      class="col-4 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: #0d6efd;
                        color: white;
                      "
                    >
                      <span>+</span>
                    </a>

                    <span class="col-4 fw-bold">10</span>
                  </div>
                </div>
              </div>
              <div class="mb-4 list-tile">
                <div class="row mb-2">
                  <span class="col-9 fw-bold">[Dummy] lorem ipsum</span>
                  <span class="col-3 fw-bold">Rp 85.000.000</span>
                </div>
                <div class="row mb-2">
                  <span class="col-9 fw-normal"
                    >Pellentesque duis at quis convallis nunc porttitor. Vivamus
                    in in maecenas tortor sed. Nam esss s s t.</span
                  >
                  <div class="row col-3">
                    <a
                      href="#"
                      class="col-4 mx-2 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: grey;
                        color: white;
                      "
                    >
                      <span>-</span>
                    </a>

                    <a
                      href="#"
                      class="col-4 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: #0d6efd;
                        color: white;
                      "
                    >
                      <span>+</span>
                    </a>

                    <span class="col-4 fw-bold">10</span>
                  </div>
                </div>
              </div>
              <div class="mb-4 list-tile">
                <div class="row mb-2">
                  <span class="col-9 fw-bold">[Dummy] lorem ipsum</span>
                  <span class="col-3 fw-bold">Rp 85.000.000</span>
                </div>
                <div class="row mb-2">
                  <span class="col-9 fw-normal"
                    >Pellentesque duis at quis convallis nunc porttitor. Vivamus
                    in in maecenas tortor sed. Nam esss s s t.</span
                  >
                  <div class="row col-3">
                    <a
                      href="#"
                      class="col-4 mx-2 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: grey;
                        color: white;
                      "
                    >
                      <span>-</span>
                    </a>

                    <a
                      href="#"
                      class="col-4 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: #0d6efd;
                        color: white;
                      "
                    >
                      <span>+</span>
                    </a>

                    <span class="col-4 fw-bold">10</span>
                  </div>
                </div>
              </div>
              <div class="mb-4 list-tile">
                <div class="row mb-2">
                  <span class="col-9 fw-bold">[Dummy] lorem ipsum</span>
                  <span class="col-3 fw-bold">Rp 85.000.000</span>
                </div>
                <div class="row mb-2">
                  <span class="col-9 fw-normal"
                    >Pellentesque duis at quis convallis nunc porttitor. Vivamus
                    in in maecenas tortor sed. Nam esss s s t.</span
                  >
                  <div class="row col-3">
                    <a
                      href="#"
                      class="col-4 mx-2 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: grey;
                        color: white;
                      "
                    >
                      <span>-</span>
                    </a>

                    <a
                      href="#"
                      class="col-4 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: #0d6efd;
                        color: white;
                      "
                    >
                      <span>+</span>
                    </a>

                    <span class="col-4 fw-bold">10</span>
                  </div>
                </div>
              </div>
              <div class="mb-4 list-tile">
                <div class="row mb-2">
                  <span class="col-9 fw-bold">[Dummy] lorem ipsum</span>
                  <span class="col-3 fw-bold">Rp 85.000.000</span>
                </div>
                <div class="row mb-2">
                  <span class="col-9 fw-normal"
                    >Pellentesque duis at quis convallis nunc porttitor. Vivamus
                    in in maecenas tortor sed. Nam esss s s t.</span
                  >
                  <div class="row col-3">
                    <a
                      href="#"
                      class="col-4 mx-2 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: grey;
                        color: white;
                      "
                    >
                      <span>-</span>
                    </a>

                    <a
                      href="#"
                      class="col-4 px-3 btn-action"
                      style="
                        text-decoration: none;
                        background-color: #0d6efd;
                        color: white;
                      "
                    >
                      <span>+</span>
                    </a>

                    <span class="col-4 fw-bold">10</span>
                  </div>
                </div>
              </div>
            </div>
            <a href="#" style="color: white; text-decoration: none">
              <div
                class="d-flex ms-4 mt-3 py-3 px-4 rounded-3"
                style="background-color: #0d6efd"
              >
                <span class="col fw-normal">Total price for 5 tickets</span>
                <span class="fw-normal">Rp 500.000</span>
              </div>
            </a>
          </div>

          <!-- Akhir Bagian Event Detail -->
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
