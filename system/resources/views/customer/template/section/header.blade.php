    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a href="" class="text-d">Admin sTORE</a>
  <a class="navbar-brand text-warning" href="#"><b>sTORE</b></a>
    <ul class="navbar-nav">
      <li>
        <a href="" class="ml-4 text-warning fas fa-bell"> Notifikasi</a>
      </li>
      <li>
        <a href="" class="ml-4 text-warning far fa-question-circle"> Bantuan</a>
      </li>
      <li class="nav-item">
        <a class="ml-4 text-warning" href="{{ url('login')}}" data-target="" data-toggle="modal">Login</a>
      </li>
      <li class="nav-item">
        <a class="ml-4 text-warning" href="{{ url('register')}}" data-target="" data-toggle="modal">Daftar</a>
      </li>
    </ul>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-warning mt-5">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">Elektronik</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Komputer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Handphone</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fashion</a>
      <li class="nav-item">
        <a class="nav-link" href="#">Otomotif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kesehatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kecantikan</a>
      </li>
    </ul>
  </div>
  <form class="">
    <div class="" style="">
      <input class="form-control" type="search" placeholder="Cari Barang" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
      </div>
    </form>
    <li class="nav-item nav flex-column">
        <a class="nav-link fa fa-cart-plus fa-2x" href="#" data-placement="bottom" data-toggle="tooltip" title="Keranjang"></a>
    </li>
</div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('public')}}/dist/img/coursel1.png" class="d-block w-100" alt="..." height="300px" width="400px">
    </div>
    <div class="carousel-item">
      <img src="{{url('public')}}/dist/img/coursel2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>