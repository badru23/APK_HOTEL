<!DOCTYPE html>
<html>
<head>
  <title>Home Tamu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/styles.css');?>">

  <script src="https://unpkg.com/feather-icons"></script>

</head>
<body>

<?php if (empty($_SESSION['user']->levels)) : ?>

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid" >
      <nav class="navbar navbar-expand-lg navbar-dark bg-Light">
        <div class="container mt-3">
          <img src="<?= base_url('assets/img/logo.png');?>" style="height: 100px">
          <div class="d-flex flex-row-reverse bd-highlight">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="<?= base_url('Tamu/Home');?>">Home</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="<?= base_url('Tamu/Kamar');?>">Kamar</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="<?= base_url('Tamu/Fasilitas');?>">Fasilitas</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link btn btn-sm btn-warning text-dark" style="border-radius: 10px;" href="<?= base_url('Auth/Login'); ?>">Login</a>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </nav>
  
  <div class="card shadow p-3 rounded-lg">
    <form>
    <div class="d-flex justify-content-evenly text-center">
      <div class="mb-3 mt-3">
        <label  class="form-label">Tanggal Cek In</label>
        <input type="date" class="form-control">
      </div>
      <div class="mb-3 mt-3">
        <label  class="form-label">Tanggal Cek Out</label>
        <input type="date" class="form-control">
      </div>
      <div class="mb-3 mt-3">
        <label  class="form-label">Jumlah Kamar</label>
        <input type="number" class="form-control">
      </div>
      <div class="mb-3 mt-4">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" style="height: 70px; width: 150px; border-radius: 20px">Pesan Sekarang</button>
       
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login dulu ya</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Login terlebih dahulu untuk memesan kamar!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Kembali</button>
                <a href="<?= base_url('Auth/Login'); ?>" class="btn btn-warning">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </form>
  </div>
   
  
</div>


<div class="container">

</div>
  
  <div class="container">
    <div class="text-center" style="margin-top: 120px;">
    
     <h1 class="mb-3">TENTANG KAMI</h1>
     <p>Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati
            sore yang hangot dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau. Convention Center
            kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000
            delegasi. Manfaatkan ruang penyelenggaraan konvensi MI.CE ataupun mewujudkan acara pernikahan adat yang mewah</p>
    </div>
  </div>

  <div class="container-fluid">
    <footer class="footer" style="margin: 7vh 0vh 1vh;">    
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <span>Copyright &copy; HOTEL HEBAT Software Engineering</span>
      </div>
    </footer> 
  </div>

<?php else : ?>

  <div class="container-fluid">
    <div class="jumbotron jumbotron-fluid" >
      <nav class="navbar navbar-expand-lg navbar-dark bg-Light">
        <div class="container mt-3">
          <img src="<?= base_url('assets/img/logo.png');?>" style="height: 100px">
          <div class="d-flex flex-row-reverse bd-highlight">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="<?= base_url('Tamu/Home');?>">Home</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="<?= base_url('Tamu/Kamar');?>">Kamar</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="<?= base_url('Tamu/Fasilitas');?>">Fasilitas</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="<?= base_url('Tamu/Pesan');?>">Pesan</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link" href="<?= base_url('Tamu/Pemesanan');?>">Pemesanan</a>
              </li>
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link btn btn-sm btn-warning text-dark" style="border-radius: 10px;" href="<?= base_url('Auth/Logout'); ?>">Logout</a>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </nav>
  
  <div class="card shadow p-3 rounded-lg">
      <form action="<?= base_url('Tamu/Pesan');?>" method="post">
        <div class="d-flex justify-content-evenly text-center">
          <div class="mb-3 mt-3">
            <label  class="form-label">Tanggal Cek In</label>
            <input type="date" class="form-control" name="tgl_cekin">
          </div>
          <div class="mb-3 mt-3">
            <label  class="form-label">Tanggal Cek Out</label>
            <input type="date" class="form-control" name="tgl_cekout">
          </div>
          <div class="mb-3 mt-3">
            <label  class="form-label">Jumlah Kamar</label>
            <input type="number" class="form-control" name="jml_kamar">
          </div>
          <div class="mb-3 mt-4">
          <button type="submit" class="btn btn-warning" style="height: 70px; width: 150px; border-radius: 20px;">Pesan Sekarang</button>
          </div>
      </div>
  </form>
  </div>
   
  
</div>


<div class="container">

</div>
  
  <div class="container">
    <div class="text-center" style="margin-top: 120px;">
    
     <h1 class="mb-3">TENTANG KAMI</h1>
     <p>Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati
            sore yang hangot dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau. Convention Center
            kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000
            delegasi. Manfaatkan ruang penyelenggaraan konvensi MI.CE ataupun mewujudkan acara pernikahan adat yang mewah</p>
    </div>
  </div>

  <div class="container-fluid">
    <footer class="footer" style="margin: 7vh 0vh 1vh;">    
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <span>Copyright &copy; HOTEL HEBAT Software Engineering</span>
      </div>
    </footer> 
  </div>

<?php endif ; ?>



<script>
  feather.replace()
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>