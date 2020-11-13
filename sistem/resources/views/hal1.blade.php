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
          <a class="nav-link active" href="{{ url('/hal1') }}">Beranda</a>
        </li>
        <li class="nav-item">
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
<div class="row mt-5">
      <div class="col-md-3 bg-light">
        <ul class="list-group list-group-flush p-5 pt-3">
          <li class="list-group-item bg-success"><i class="fas fa-list"></i> Kategory</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Gitar Acoustic</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Gitar listrik</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Violin Acousttic</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Violin Listrik</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Piano</li>
        </ul>
      </div>
    <div class="col-md-9">
      <div class="row mt-5 mx-auto">
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/gitar01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gitar Listrik Yamaha</h5>
              <p class="card-text">gitar listrik dengan harga murah</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk1" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp.5.600.999</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/violin02.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">violin 4/4</h5>
              <p class="card-text">free ongkir seluruh indonesia</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk2" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp1.800.000</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/piano03.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">piano original</h5>
              <p class="card-text">terlaris sepanjang masa</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk3" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp.20.000.000</a>
            </div>
          </div>
        </div>
        <div class="row mt-5 mx-auto">
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/piano04.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">piano keren</h5>
              <p class="card-text">piano yang indah dengan memiliki suara unik</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk4" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp.15.600.999</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/gitar05.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">gitar string acoustic</h5>
              <p class="card-text">gitar dengan pemikat hati wanita</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk5" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp7.450.000</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/violin04.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">violin anjay</h5>
              <p class="card-text">melody untuk lagu tidur</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk6" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp.10.000.000</a>
            </div>
          </div>
          <div class="row mt-5 mx-auto">
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/gitar06.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">gitar listrik keren</h5>
              <p class="card-text">gitar listrik suara jernih</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk7" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp8.700.000</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/violin03.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">violin import original</h5>
              <p class="card-text">biola lengkap dengan suara indah</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk8" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp12.550.000</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="../materi2/public/image/piano02.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">piano yamaha BL51</h5>
              <p class="card-text">spesial edition</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i><br>
              <a href="#" class="btn btn-success" data-target="#produk9" data-toggle="modal">detail</a>
              <a href="#" class="btn btn-danger">Rp.17.000.000</a>
            </div>
          </div>
        </div>
        <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <img style="width: 450px;" src="../materi2/public/image/gitar01.jpg">
                  </div>
                </div>
                <div class="col-md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>gitar listrik yamaha</td>
                    </tr>
                    <tr>
                      <th>Rating Produk</th>
                        <td>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i><br>
                        </td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>standar</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-danger">Beli Sekarang</button>
              </div>
            </div>
          </div>
        </div>  
        <div class="modal fade" id="produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <img style="width: 450px;" src="../materi2/public/image/violin02.jpg">
                  </div>
                </div>
                <div class="col-md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nama Produk</th>
                      <td>violin 4/4</td>
                    </tr>
                    <tr>
                      <th>Rating Produk</th>
                        <td>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><br>
                        </td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>standar</td>
                    </tr>
                  </table>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-danger">Beli Sekarang</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>