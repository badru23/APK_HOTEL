<!DOCTYPE html>
<html>
<head>
  <title>Fasilitas Kamar</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  
  <script src="https://unpkg.com/feather-icons"></script>

<style>

  .jumbotron{
    background-image: url('<?= base_url('assets/login-v19/images/bg.jpg');?>');
    height: 40vw;
    border-radius: 0px 0px 20px 20px;
  }

</style>

</head>
<body>

<?php if (empty($_SESSION['user']->levels)) : ?>

  <div class="container-fluid">
    <div class="jumbotron jumbotron-fluid" >
      <nav class="navbar navbar-expand-lg navbar-dark bg-Light">
        <div class="container mt-3">
          <img src="<?= base_url('assets/img/logo.png');?>" style="height: 100px">

          <div class="d-flex flex-row-reverse bd-highlight">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"aria-label="Toggle navigation">
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
    </div>
   
  </div>

<div class="container mt-5">

	<div class="row" style="margin: 5vh 5vh 0vh;">

      <?php foreach ($kamar as $key) : ?>

        <div class="col-md-4">
          <div class="card mt-4" style="border-radius: 10px;">
          	<img src="<?php echo $key->gambar?>" class="card-img-top" style="height: 170px;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $key->nama_faskamar?></h5>
              <p class="card-text"><?php echo $key->kategori?></p>
            </div>
          </div>
        </div>

   	  <?php endforeach ;?>

   	</div>

   	<a href="<?= base_url('Tamu/Kamar');?>" class="btn btn-warning mt-4" style="margin-left: 6vh;">Kembali</a>

</div>


   	<div class="container">
   	  
   	</div>

  <div class="container-fluid">
    <footer class="footer" style="margin: 5vh 0vh 1vh;">    
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"aria-label="Toggle navigation">
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
  </div>
   
  </div>

<div class="container mt-5">

	<div class="row" style="margin: 5vh 5vh 0vh;">

      <?php foreach ($kamar as $key) : ?>

        <div class="col-md-4">
          <div class="card mt-4" style="border-radius: 10px;">
          	<img src="<?php echo $key->gambar?>" class="card-img-top" style="height: 170px;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $key->nama_faskamar?></h5>
              <p class="card-text"><?php echo $key->kategori?></p>
            </div>
          </div>
        </div>

   	  <?php endforeach ;?>

   	</div>

   	<a href="<?= base_url('Tamu/Kamar');?>" class="btn btn-warning mt-4" style="margin-left: 6vh;">Kembali</a>

</div>

  <div class="container-fluid">
    <footer class="footer" style="margin: 5vh 0vh 1vh;">    
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