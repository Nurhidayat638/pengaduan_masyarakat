<?php 
require 'config.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
				alert('User baru ditambahkan');
				document.location.href = 'login.php';
		      </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-8 offset-md-4">
			<div class="card mb-5" style="width: 25rem;">
			  <div class="card-body">
			    <h5 class="card-title text-center">Website Layanan Kesehatan</h5>
			    <h6 class="card-subtitle mb-2 text-muted mt-5 text-center">Silahkan Daftar</h6>
			    <form method="post" action="" autocomplete="off">
			    	<div class="form-group">
			    		<label>NIK</label>
			    		<input type="text" name="nik" placeholder="Masukkan NIK" class="form-control" maxlength="16">
			    	</div>
			    	<div class="form-group">
			    		<label>Nama</label>
			    		<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
			    	</div>
			    	<div class="form-group">
			    		<label>Username</label>
			    		<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
			    	</div>
			    	<div class="form-group">
			    		<label>Password</label>
			    		<input type="password" name="password" placeholder="Masukkan Password" class="form-control">
			    	</div>
			    	<div class="form-group">
			    		<label>Konfirmasi Password</label>
			    		<input type="password" name="password2" placeholder="Masukkan Konfirmasi Password" class="form-control">
			    	</div>
			    	<div class="form-group">
			    		<label>Telepon</label>
			    		<input type="text" maxlength="13" name="telephone" placeholder="Masukkan Telepon" class="form-control">
			    	</div>
			    	<button type="submit" name="register" class="btn btn-primary btn-block">Daftar</button>
			    </form>
			    <div class="col-md-12 text-center mt-2">
			    	<a href="index.php" class="">Kembali Website</a>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>