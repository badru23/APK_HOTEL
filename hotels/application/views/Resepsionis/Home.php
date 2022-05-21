<!DOCTYPE html>
<html>
<head>
	<title>Resepsionis</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-light">

	<div class="container-fluid"> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning" style="margin: 4vh 5vh 0vh; border-radius: 15px;">
        <div class="container-fluid mt-1" style="margin: 0vh 2vh 0vh;">
           <h2>Resepsionis Data Pesanan</h2>
          <div class="d-flex flex-row-reverse bd-highlight">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item p-2 bd-highlight">
                  <a class="nav-link text-dark" href="<?= base_url('Resepsionis/Bayar');?>">Bayar</a>
                </li>
                <li class="nav-item p-2 bd-highlight">
                  <a class="nav-link text-dark" href="<?= base_url('Resepsionis/Home');?>">Data Pemesanan</a>
                </li>
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
    <div class="content-wrapper" style="margin: 4vh 5vh 0vh;">
      <form class="row gy-2 gx-3 align-items-center d-flex justify-content-between">
        <div class="col-auto">
          <div class="input-group">
            <div class="input-group-text"><i data-feather="calendar"></i></div>
            <input type="date" class="form-control" id="inputtanggalcekin" onmouseleave="tanggalcekin()">
          </div>
        </div>
        <div class="col-auto">
          <div class="input-group">
            <input type="text" class="form-control" id="inputkodebooking" onkeyup="kodebooking()" placeholder="Masukkan Kode Booking">
            <div class="btn btn-dark" style="margin-left:5px; border-radius: 5px;">cari</div>
          </div>
        </div>
        <div class="col-auto">
          <div class="input-group">
            <div class="input-group-text"><i data-feather="search"></i></div>
            <input type="text" class="form-control" id="inputnamapemesan" onkeyup="namapemesan()" placeholder="search...">
          </div>
        </div>
      </form>
    </div>
                    
      <section class="content" style="margin: 2vh 5vh 0vh;">
        <table class="table table-striped table-bordered" id="myTable">
          <tr>
            <th>Nama Pemesan</th>
            <th>Email</th>
            <th>No Telp</th>
            <th>Nama Tamu</th>
            <th>Tipe Kamar</th>
            <th>Tanggal Cek In</th>
            <th>Tanggal Cek Out</th>
            <th>Jumlah Kamar</th>
            <th>Harga</th>
            <th>Pembayaran</th>
            <th>Status</th>
            <th>Payend</th>
            <th>Kode Pesanan</th>
            <th>Aksi</th>
          </tr>

        <?php foreach ($pesanan as $key) : ?>
                                
          <tr>
            <td><?php echo $key->nama_pemesan?></td>
            <td><?php echo $key->email?></td>
            <td><?php echo $key->no_telp?></td>
            <td><?php echo $key->nama_tamu?></td>
            <td><?php echo $key->nama_kamar?></td>
            <td><?php echo $key->tgl_cekin?></td>
            <td><?php echo $key->tgl_cekout?></td>
            <td><?php echo $key->jml_kamar?></td>
            <td><?php echo $key->total_harga?></td>
            <td><?php echo $key->pembayaran?></td>
            <td><?php echo $key->status_book?></td>
            <td><?php echo $key->payend?></td>
            <td><?php echo $key->kode_pesanan?></td>
            <td>
              <a class="btn btn-sm btn-primary" href="<?= base_url('Resepsionis/EditDataPemesanan').'?id_pemesanan='.$key->id_pemesanan;?>">Ubah</a>
              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal<?= $key->id_pemesanan?>">Hapus</button>  
            </td>    
          </tr>

          <div class="modal fade" id="modal<?= $key->id_pemesanan?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <a href="<?= base_url('Resepsionis/Hapuspesanan/').'?id_pemesanan='.$key->id_pemesanan; ?>" class="btn btn-warning">Hapus</a>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach ; ?>

        </table>
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

<script>
  
  function namapemesan() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("inputnamapemesan");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

 function kodebooking() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("inputkodebooking");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[11];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function tanggalcekin() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("inputtanggalcekin");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

</script>


</body>
</html>