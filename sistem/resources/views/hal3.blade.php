<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="hal1.css">
    <script src="https://kit.fontawesome.com/d0ee1fa2b0.js" crossorigin="anonymous"></script>
  

    <title>Produk</title>
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
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/hal2') }}">About</a>
        </li>
        <li class="nav-item active">
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

</head>
</body>

    <div class="container" style="margin-top: 7%; width: 30%; box-shadow: 0 3px 20px; padding: 40px">
        <h2 class="text-center">FORM LOGIN</h2>
        <hr>
        <form>
            <div class="form-group">
                <label>Username</label>

            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" name="" class="form-control" placeholder="Masukan Username Anda">
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                    </div>
                <input type="password" name="" class="form-control" placeholder="Masukan Password Anda">
                </div>
            </div>
            <button type="submit" style="width: 48%;" class="btn btn-success">SUBMIT</button>
            <button type="reset" style="width: 48%;" class="btn btn-danger">RESET</button>
        </form>
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