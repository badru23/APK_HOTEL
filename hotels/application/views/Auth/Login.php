
<!doctype html>
<html lang="en">
  <head>
  	<title>form login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=  base_url('assets/login/css/style.css')?>">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?=  base_url('assets/login/images/bg.jpg');?>">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Form Login</h3>
		      	<form action="<?= base_url('Auth/Cekuser');?>" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="passwords" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	          </form>
	         
			  <div class="w-100 text-center mt-4 text">
				          	<a href="<?= base_url('Auth/Registrasi')?>">&mdash;  Sign Up  &mdash;</a>
			          	</div>
	</section>

	<script src="<?=  base_url('assets/login/js/jquery.min.js')?>"></script>
  <script src="<?=  base_url('assets/login/js/popper.js')?>"></script>
  <script src="<?=  base_url('assets/login/js/bootstrap.min.js')?>"></script>
  <script src="<?=  base_url('assets/login/js/main.js')?>"></script>

	</body>
</html>


