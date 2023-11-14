<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="{{ asset('img/nav.jpeg') }}" alt="Navbar Image" style="border-radius: 50%; width:50px; height: 50px; ">
    SchoolRate
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
    <a class="nav-link {{ Request::is('sma/all') ? 'active' : '' }}" href="{{ url('sma/all') }}">SMA</a>
    </li> 

    <li class="nav-item">
    <a class="nav-link {{ Request::is('smk/all') ? 'active' : '' }}" href="{{ url('smk/all') }}">SMK</a>
    </li>

      </ul>
    </div>
  </div>
</nav>   

