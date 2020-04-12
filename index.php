<?php 
session_start();
require 'tampilan/header.php';
?>
<!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


	<!-- slide -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/slide/image1.jpg" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slide/image2.jpg" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slide/image3.jpg" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slide/image4.jpg" class="d-block w-100">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<div class="card-body text-center">
							<i class="fas fa-edit" style="font-size: 30px"></i>
							<h5>Tulis Laporan</h5>
							<p>Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body text-center">
							<i class="fas fa-chevron-right" style="font-size: 30px"></i>
							<h5>Proses Verifikasi</h5>
							<p>Dalam 3 hari, laporan akan diverifikasi dan diteruskan kepada instansi berwenang</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body text-center">
							<i class="fas fa-comments" style="font-size: 30px"></i>
							<h5>Beri Tanggapan</h5>
							<p>Anda dapat menanggapi balasan  diberikan oleh instansi dalam waktu 10 hari</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-body text-center">
							<i class="fas fa-check" style="font-size: 30px"></i>
							<h5>Selesai</h5>
							<p>Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php require 'tampilan/footer.php'; ?>