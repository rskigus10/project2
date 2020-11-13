<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="hal1.css">
    <script src="https://kit.fontawesome.com/d0ee1fa2b0.js" crossorigin="anonymous"></script>
  

    <title>Beranda</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
  <div class="container">
    <h3><i class="fas fa-cart-plus text-black mr-2"></i></h3>
    <a class="navbar-brand font-weight-bold" href="#">MELODI STORE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-4">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/hal1') }}">Beranda</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/hal2') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/hal3') }}">Login</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="icon mt-2">
      <h5>
      <i class="fas fa-cart-plus text-black ml-3 mr-3"></i>
      <i class="fas fa-envelope mr-3"></i>
      <i class="fas fa-bell mr-3"></i>
      </h5>
    </div>
  </div>
</nav>
<nav class="container" style="margin-left: 100px;">
        <nav class="container">
            <div class="row" style="margin-top: 120px;">
                <div class="col-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="1500">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../materi2/public/image/cr01.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../materi2/sistem/vendor/image/cr02.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../materi2/sistem/vendor/cr03.jpg" class="d-block w-100" alt="...">
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
            </nav>
            </div>
                </div>
                <div class="col-6">
                    <dl>
                        <dt>MELODY STORE</dt>
                        <dd>ALAT MUSIK TERBAIK</dd>
                    </dl>
                    <dl>
                        <dt>LOKASI</dt>
                        <dd>KETAPANG</dd>
                    </dl>
                    <dl>
                        <dt>KUALITAS</dt>
                        <dd>TERBAIK SEPANJANG MASA</dd>
                    </dl>
                </div>
            </div>
            <footer class="bg-dark text-white p-5">
        <div class="row">
          <div class="col-md-3">
            <h5>LAYANAN PELANGGAN</h5>
            <ul>
              <li>Pusat Bantuan</li>
              <li>Cara Pembelian</li>
              <li>Pegiriman</li>
              <li>Lokasi</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>TENTANG KAMI</h5>
            <p>toko online ini hanya rekayasa saja untuk memenuh pertugasan duniawi</p>
          </div>
          <div class="col-md-3">
              <h5>MITRA KERJASAMA</h5>
              <li>JNE</li>
              <li>JNT</li>
              <li>SICEPAT</li>
              <li>PT.POS INDONESIA</li>
          </div>
          <div class="col-md-3">
            <h5>HUBUNGI KAMI</h5>
            <ul>
              <li>021-748393-33837</li>
              <li>melodyst@gmail.com</li>
            </ul>
          </div>
        </div>
      </footer>

      <div class="co[yright text-center text-white font-weight-bold bg-success p-2">
        <p>develop by rskigus copyright <i class="far fa-copyright"></i>2020</p>
      </div>

</head>
</body>