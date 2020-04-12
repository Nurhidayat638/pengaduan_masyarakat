<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		<a class="navbar-brand font-weight-bold" href="#"><img src="img/logo/logo.svg" width="100" height="45">Layanan Pengaduan</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav ml-auto">
	      <a class="nav-item nav-link" href="index.php">Home</a>
	      <?php if(isset($_SESSION["masyarakat"])) : ?>
	      	<a class="nav-item nav-link" href="tanggapan.php">Tanggapan</a>
	      	<a class="nav-item nav-link" href="pengaduan.php">Pengaduan</a>
	      	<a class="nav-item nav-link" href="#"><?php echo $_SESSION["masyarakat"]["username"]; ?></a>
	      	<a class="nav-item nav-link" href="logout.php">Logout</a>
	      <?php else: ?>
	      	<a class="nav-item nav-link" href="daftar.php">Daftar</a>
	      	<a class="nav-item nav-link" href="login.php">Login</a>
	      <?php endif; ?>
	    </div>
	  </div>
		</div>
	</nav>
	<!-- akhir-navbar -->