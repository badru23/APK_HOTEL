
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HOTEL HEBAT</title>
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/template/assets/favicon.ico')?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/template/css/styles.css')?>" rel="stylesheet" />

        

    </head>
    <body>


   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?= base_url('tamu/home')?>">HOTEL HEBAT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('tamu/home')?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('tamu/kamar')?>">Kamar</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('tamu/fasilitas')?>">Fasilitas Hotel</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('tamu/pemesanan')?>">Riwayat Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('auth/logout')?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url(<?= base_url('assets/template/')?>assets/img/home-bg1.jpg)">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Pesan Kamar</h1>
                         
                        </div>
                    </div>
                </div>
            </div>
        </header>
<div class="container">
  <h1 class="mt-5">Form Pemesanan</h1>

  <form action="<?= base_url('Tamu/DataPemesanan');?>" method="post">
    <div class="row mb-3 mt-5">
      <label class="col-sm-2 col-form-label">Nama Pemesan</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_pemesan" value="<?= $user->nama?>" readonly>
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" name="email" >
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">No Telepon</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="no_telp">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Nama Tamu</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_tamu">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Tipe kamar</label>
      <div class="col-sm-5">
        <select class="form-select" aria-label="Default select example" name="id_kamar">
          <option selected>Pilih Tipe Kamar</option>
          <option value="1">Superior Room</option>
          <option value="2">Deluxe Room</option>
          <option value="3">Junior Suite Room</option>
          <option value="4">Suite Room</option>
        </select>
      </div>
    </div>

    <?php if (!empty($datakiriman)) :?>

    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Tanggal Cek In</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tgl_cekin" value="<?= $datakiriman['tgl_cekin']?>">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Tanggal Cek Out</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tgl_cekout" value="<?= $datakiriman['tgl_cekout']?>">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Jumlah Kamar</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="jml_kamar" value="<?= $datakiriman['jml_kamar']?>">
      </div>
    </div>

    <?php else :?>

    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Tanggal Cek In</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tgl_cekin">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Tanggal Cek Out</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tgl_cekout">
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Jumlah Kamar</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" name="jml_kamar">
      </div>
    </div>

    <?php endif ;?>
    
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Pembayaran</label>
      <div class="col-sm-5">
        <select class="form-select" aria-label="Default select example" name="pembayaran">
          <option selected>Pilih Metode Pembayaran</option>
          <option value="BayarDitempat">Bayar DiTempat</option>
          <option value="TransferBankBCA">Transfer Bank BCA</option>
          <option value="TransferBankBRI">Transfer Bank BRI</option>
          <option value="TransferBankMandiri">Transfer Bank Mandiri</option>
        </select>
      </div>
    </div>
     <div class="row mb-3">
      <label class="col-sm-2 col-form-label"></label>
      <div class="col-sm-5">
        <button type="submit" class="btn btn-warning form-control">Konfirmasi Pesanan</button>
      </div>
    </div>
</form>

</div>
 <!-- Footer-->
 <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; HOTEL HEBAT</div>
                    </div>
                </div>
            </div>
        </footer>

  <script>
    feather.replace()
  </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('assets/tempalate/js/scripts.js')?>"></script>
    </body>
</html>

</html>