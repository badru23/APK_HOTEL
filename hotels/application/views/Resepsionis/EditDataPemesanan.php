<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Pemesanan</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-light">

	<div class="container-fluid"> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning" style="margin: 4vh 5vh 0vh; border-radius: 15px;">
        <div class="container-fluid mt-1" style="margin: 0vh 2vh 0vh;">
          <h2>Ubah Data Pemesanan</h2>
          <div class="d-flex flex-row-reverse bd-highlight">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item p-2 bd-highlight">
                  <a class="nav-link btn btn-sm btn-light text-dark" style="border-radius: 10px;" href="<?= base_url('Auth/Login'); ?>">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
</div>

	<div class="container-fluid">
                    
      <section class="content" style="margin: 2vh 5vh 0vh;">
        <div class="card" style="border-radius: 10px;">
          <div class="card-body">

            <?php foreach ($editpesanan as $key) : ?>

            <form class="row g-3" action="<?= base_url('Resepsionis/SimpanEditpesanan').'?id_pemesanan='.$key->id_pemesanan;?>" method="post">
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" name="nama_pemesan" value="<?php echo $key->nama_pemesan?>" readonly>
              </div>
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $key->email?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">No Telepon</label>
                <input type="number" class="form-control" name="no_telp" value="<?php echo $key->no_telp?>">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Nama Tamu</label>
                <input type="text" class="form-control" name="nama_tamu" value="<?php echo $key->nama_tamu?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Room</label>
              	<select class="form-select" aria-label="Default select example" name="id_kamar">
                  <?php foreach ($tiperoom as $row) : ?>
                  <option value="<?php echo $row->id_kamar?>" selected><?php echo $row->nama_kamar?></option>
                  <?php endforeach; ?>
              	</select>
              </div>
               <div class="col-md-6">
                <label class="form-label">Tanggal Cekin</label>
                <input type="date" class="form-control" name="tgl_cekin" value="<?php echo $key->tgl_cekin?>">
              </div>
               <div class="col-md-6">
                <label class="form-label">Tanggal Cekout</label>
                <input type="date" class="form-control" name="tgl_cekout" value="<?php echo $key->tgl_cekout?>">
              </div>
               <div class="col-md-6">
                <label class="form-label">Jumlah Kamar</label>
                <input type="number" class="form-control" name="jml_kamar" value="<?php echo $key->jml_kamar?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">Total Harga</label>
                <input type="number" class="form-control" name="total_harga" value="<?php echo $key->total_harga?>">
              </div>
               <div class="col-md-6">
                <label class="form-label">Pembayaran</label>
                <select class="form-select" aria-label="Default select example" name="pembayaran" required>
                  <option value="<?php echo $key->pembayaran?>" selected><?php echo $key->pembayaran?></option>
                  <option value="BayarDitempat">Bayar DiTempat</option>
                  <option value="TransferBankBCA">Transfer Bank BCA</option>
                  <option value="TransferBankBRI">Transfer Bank BRI</option>
                  <option value="TransferBankMandiri">Transfer Bank Mandiri</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="status" required>
                  <option value="<?php echo $key->status?>" selected><?php echo $key->status?></option>
                  <option class="text-dark" value="Cekin">Cekin</option>
                  <option class="text-dark" value="Cekout">Cekout</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Kode Pesanan</label>
                <input type="text" class="form-control" name="kode_pesanan" value="<?php echo $key->kode_pesanan?>">
              </div>

              <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?= base_url('Resepsionis/Home');?>" class="btn btn-danger">Cancel</a>
              </div>
            </form>

            <?php endforeach ; ?> 

          </div>
        </div>
      </section>

    
  </div>

  <div class="container-fluid">
    <footer class="footer" style="margin: 4vh 5vh 1vh;">    
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <span>Copyright &copy; HOTEL HEBAT Software Engineering</span>
      </div>
    </footer> 
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
  feather.replace()
</script>

</body>
</html>