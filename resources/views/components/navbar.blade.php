<header>
  
<nav class="navbar navbar-expand-lg p-3">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center justify-content-evenly" href="/">
      <img src="{{ asset('assets/image/logoTb.png')}}" alt="">
      <p class="p-0 m-0">Klik Koperasi</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="list-item" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Makanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Minuman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Es Krim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Buatan Rumahan</a>
        </li>
      </ul>
    </div>
    <div class="search-bar" >
      <form class="d-flex" role="search" method="get" action="{{ route('search') }}">
        <input class="form-control me-2 search-bar" type="text" placeholder="Temukan yang kamu mau" value="{{ old('search') }}"
          aria-label="Search" style="border-radius: 15px; border: 1px solid rgb(103, 103, 103); width: 230px" name="search">
      </form>
      {{-- <form class="form d-flex" method="get" action="{{ route('search') }}">
            <input type="text" name="search" class="form-control me-2 search-bar" id="search" placeholder="Masukkan keyword">
    </form> --}}
    </div>
  </div>
</nav>
</header>
