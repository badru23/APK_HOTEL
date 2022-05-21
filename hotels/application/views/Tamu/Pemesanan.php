<!DOCTYPE html>
<html>
<head>
  <title>Pemesanan</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid"> 
  <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="margin: 4vh 5vh 0vh; border-radius: 15px;">
        <div class="container-fluid mt-1" style="margin: 0vh 2vh 0vh;">
          <h1 class="">Data Pemesanan</h1>
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
                <a class="nav-link btn btn-sm btn-light text-dark" style="border-radius: 10px;" href="<?= base_url('Auth/Logout'); ?>">Logout</a>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </nav>
</div>

<div class="container-fluid">
  <div class="d-flex bd-highlight">
    
  </div>
</div>

<div class="row" style="margin: 4vh 5vh 0vh;">

  <?php foreach ($pemesanan as $key) : ?>

    <div class="col-md-3">
      <div class="card shadow mb-5" style="border-radius: 10px;">
        <img src="<?php echo $key->gambar ?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Pesanan Anda</h5>
          <hr>
          <p class="card-text">Nama Pemesan : <?php echo $key->nama_pemesan?></p>
          <p class="card-text">Email : <?php echo $key->email?></p>
          <p class="card-text">Nomor HP : <?php echo $key->no_telp?></p>
          <p class="card-text">Tipe Kamar : <?php echo $key->nama_kamar?></p>
          <p class="card-text">Tanggal Cekin : <?php echo $key->tgl_cekin?></p>
          <p class="card-text">Tanggal Cekout : <?php echo $key->tgl_cekout?></p>
          <p class="card-text">Jumlah Kamar : <?php echo $key->jml_kamar?></p>
          <p class="card-text">Harga : <?php echo $key->total_harga?></p>
          <p class="card-text">Pembayaran : <?php echo $key->pembayaran?></p>
          <p class="card-text">Kode Pesanan : <?php echo $key->kode_pesanan?></p>

        <div class="d-flex mb-2 mt-4">
          <a href="<?= base_url('Tamu/BatalkanPemesanan').'?id_pemesanan='.$key->id_pemesanan;?>" class="btn btn-sm btn-dark">Batalkan Pesanan</a>
          <a href="<?= base_url('Tamu/Pesan');?>" class="btn btn-sm btn-warning" style="margin-left: 1%;">Pesan Lagi</a>
          <a href="<?= base_url('Tamu/Cetakpdf').'?id_pemesanan='.$key->id_pemesanan;?>" class="btn btn-sm btn-primary ms-auto">Cetak PDF</a>  
          </div>
          
          

        </div>
      </div>
    </div>

  <?php endforeach ;?>
         
</div>

<div class="container-fluid">
    <footer class="footer" style="margin: 5vh 5vh 1vh;">    
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <span>Copyright &copy; HOTEL HEBAT Software Engineering</span>
      </div>
    </footer> 
  </div>

</body>
</html>