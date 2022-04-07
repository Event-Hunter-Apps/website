<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- My CSS -->
  <!-- <link rel="stylesheet" href="style_dito.css" /> -->
  <link rel="stylesheet" href="./assets/css/style_dito.css">

  <title>Checkout</title>
</head>

<body>

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
          <h3>Promo</h3>
        </div>
      </div>

      <div class="row justify-content-center">
        <!-- Bagian Promo -->
        <div class="col-5">
          <ul class="list-group">
            <li class="list-group-item bg-danger text-light">
              Please complete your payment now. Otherwise your ticket will be
              released
            </li>
          </ul>

          <h2 class="my-3 text-danger fw-bold text-center">13:20</h2>

          <div class="list-group">
            <div class="form-check list-group-item">
              <input class="form-check-input ms-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
              <label class="form-check-label" for="flexRadioDefault1">
                Credit Card / Debit Card
              </label>
            </div>
            <br />
            <div class="form-check list-group-item">
              <input class="form-check-input ms-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
              <label class="form-check-label" for="flexRadioDefault2">
                GoPay
              </label>
            </div>
            <br />
            <div class="form-check list-group-item">
              <input class="form-check-input ms-0 me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
              <label class="form-check-label" for="flexRadioDefault3">
                BCA
              </label>
            </div>
            <br />
          </div>
        </div>
        <!-- Akhir Bagian Promo -->

        <!--  Bagian Event Detail -->

        <div class="col-4">
          <div class="shadow-sm ms-4 px-5">
            <div class="row text-center mb-4">
              <div class="col mt-3">
                <h4 class="fw-bold">Event Detail</h4>
              </div>
            </div>
            <div class="row text-center">
              <div class="col">
                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F1.bp.blogspot.com%2F-O8m7EbFkipo%2FTcdcB_GxaKI%2FAAAAAAAAADA%2F1BEBXq0g20o%2Fs1600%2Fmonas.jpg&f=1&nofb=1" class="img-responsive-detail" alt="Gambar Wisata" style="border-radius: 20px" />
              </div>
            </div>
            <div class="d-flex border-top border-dark border-bottom border-dark my-3 py-2">
              <span class="fw-bold">Monas Jakarta</span>
            </div>
            <div class="d-flex mb-2">
              <span class="col fw-normal">Visit date :</span>
              <span class="fw-normal">Sunday, 13 march 2022</span>
            </div>

            <div class="d-flex mb-2">
              <span class="col fw-normal">Visit date :</span>
              <span class="fw-normal">Sunday, 13 march 2022</span>
            </div>
            <div class="d-flex border-top border-dark"></div>
            <div class="row text-center mt-4 mb-2">
              <div class="col">
                <h4 class="fw-bold">Payment Detail</h4>
              </div>
            </div>
            <div class="d-flex mb-2">
              <span class="col fw-normal">Ticket Price :</span>
              <span class="fw-normal">Rp. 500.000</span>
            </div>

            <div class="d-flex mb-2">
              <span class="col fw-normal">Converence Fee :</span>
              <span class="fw-normal">Free</span>
            </div>
            <div class="d-flex mb-2">
              <span class="col fw-normal">Admin Fee :</span>
              <span class="fw-normal">Free</span>
            </div>
            <div class="d-flex border-top border-dark pb-1"></div>
            <div class="d-flex mb-2 pb-3">
              <span class="col fw-normal">Total</span>
              <span class="fw-normal">Rp. 500.000</span>
            </div>
          </div>
          <div class="row ms-4 text-center mt-3 py-3 rounded-3" style="background-color: #57c2b8">
            <a href="#" style="color: white; text-decoration: none">
              Pay Now
            </a>
          </div>
        </div>

        <!-- Akhir Bagian Event Detail -->
      </div>
    </div>
  </section>

  <!-- Akhir Content -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>