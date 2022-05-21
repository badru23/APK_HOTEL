<!DOCTYPE html>
<html>
<head>
	<title>Cetak PDF</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">
		@media print{

		}

		button#tombol-print.btn.btn.primary {
			display: none;
			visibility: none;
		}

	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				 <?php foreach ($dataID as $key) :?>

				<div class="card" style="width: 18rem;">
				  <img src="<?= $key->gambar?>" class="card-img-top">
  					<div class="card-body">
  					<h5 class="card-title">Struk Pemesanan</h5>
    				<hr>
				    <p class="card-text">Nama Tamu : <?= $key->nama_tamu?></p>
				    <p class="card-text">Tanggal Cek In : <?= $key->tgl_cekin?></p>
				    <p class="card-text">Tanggal Cek Out : <?= $key->tgl_cekout?></p>
				    <p class="card-text">Harga : Rp.<?= $key->total_harga?></p>
				    <p class="card-text">Kode Pesanan : <?= $key->kode_pesanan?></p>
 				 </div>
				</div>
				
				  <?php endforeach ;?>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>