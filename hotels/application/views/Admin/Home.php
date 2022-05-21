<!DOCTYPE html>
<html>
<head>
	<title>Admin Kamar</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-light">

	<div class="container-fluid"> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin: 4vh 5vh 0vh; border-radius: 15px;">
        <div class="container-fluid mt-1" style="margin: 0vh 2vh 0vh;">
          <img src="<?= base_url('assets/img/logo.png');?>" style="height: 70px">
          <div class="d-flex flex-row-reverse bd-highlight">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                
                <li class="nav-item p-2 bd-highlight">
                  <a class="nav-link" href="<?= base_url('Admin/Home');?>">Kamar</a>
                </li>
                <li class="nav-item p-2 bd-highlight">
                  <a class="nav-link" href="<?= base_url('Admin/FasilitasKamar');?>">Fasilitas Kamar</a>
                </li>
                <li class="nav-item p-2 bd-highlight">
                  <a class="nav-link" href="<?= base_url('Admin/FasilitasHotel');?>">Fasilitas Hotel</a>
                </li>
                
              <li class="nav-item p-2 bd-highlight">
                <a class="nav-link btn btn-sm btn-light text-primary" style="border-radius: 10px;" href="<?= base_url('Auth/Login'); ?>">Logout</a>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </nav>
</div>

	<div class="container-fluid">
    <div class="content-wrapper" style="margin: 3vh 5vh 0vh;">
      <section class="content-header">
        <h3>Admin Kamar</h3>
      </section>
    </div>
                    
      <section class="content" style="margin: 2vh 5vh 0vh;">
        <table class="table table-striped table-bordered" id="myTable">
          <tr>
            <th>Tipe Kamar</th>
            <th>Jumlah kamar</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>

        <?php foreach ($kamar as $key) : ?>
                                
          <tr>
            <td><?php echo $key->nama_kamar?></td>
            <td><?php echo $key->stok?></td>
            <td><img src="<?php echo $key->gambar?>" style="height: 50px;"></td>
            <td><?php echo $key->harga?></td>
            <td width="1000"><?php echo $key->keterangan?></td>
            <td width="130">
              <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/EditKamar/').'?id_kamar='.$key->id_kamar;?>">Ubah</a>
              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal<?= $key->id_kamar?>">Hapus</button>   
            </td>    
          </tr>

          <div class="modal fade" id="modal<?= $key->id_kamar?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Anda yakin ingin menghapus?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Kembali</button>
                  <a href="<?= base_url('Admin/Hapuskamar/').'?id_kamar='.$key->id_kamar;?>" class="btn btn-warning">Hapus</a>
                </div>
              </div>
            </div>
          </div>
               
        <?php endforeach ; ?>

        </table>
      </section>

    <div class="d-flex justify-content-end" style="margin-right: 5vh;">
      <a href="<?= base_url('Admin/DataKamar');?>" class="btn btn-primary"><i data-feather="plus-circle"></i></a>
    </div>
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