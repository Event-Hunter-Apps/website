<!-- Navbar -->
<nav class="autohide shadow navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/home">
      <img src="https://media.discordapp.net/attachments/947504606454353961/955881757662666772/Logo.png" alt="" height="40" class="d-inline-block" />
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home" style=" font-family:poppins;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/events" style=" font-family:poppins;">Event</a>
        </li>

      </ul>
      <ul class="navbar-nav ms-4">
        <li class="nav-item">
          
        </li>

        <li>
          <div class="btn-group">
            <button class="nav-link btn btn-link dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
              <i class="bi bi-person-circle"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="defaultDropdown">
              <li>
                <div class="dropdown-item">
                  <div>
                    {{ Auth::user()->nama}}

                  </div>
                  {{Auth::user()->role->name}}
                </div>
              </li>
              <!-- kalo misal role nya EO : tambahin 'Add Your Event' -->
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">Log out</button>
                </form>
              </li>

            </ul>
          </div>
        </li>
        <li class="nav-item">
          
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Akhir Navbar -->