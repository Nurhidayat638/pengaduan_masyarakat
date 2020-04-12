<?php
session_start();
require '../config.php';
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username'");

	// cek username
    if (mysqli_num_rows($result) === 1) {
    
    // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

			// set session
            $_SESSION["login"] = true;
            $_SESSION["petugas"] = $row;

            echo "<script>
              alert('Login Berhasil');
              document.location.href= 'index.php';
             </script>";
        }
    }

    $error = true;

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-8 offset-md-4">
			<div class="card mb-5" style="width: 25rem;">
			  <div class="card-body">
			    <h5 class="card-title text-center">Website Layanan Kesehatan</h5>
			    <h5 class="card-title text-center">Petugas</h5>
			    <h6 class="card-subtitle mb-2 text-muted mt-3 text-center">Silahkan Login</h6>
			    <form method="post" action="" autocomplete="off">
			    	<div class="form-group">
			    		<label>Username</label>
			    		<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
			    	</div>
			    	<div class="form-group">
			    		<label>Password</label>
			    		<input type="password" name="password" placeholder="Masukkan Password" class="form-control">
			    	</div>
			    	<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
			    </form>
			    <div class="col-md-12 text-center mt-2">
			    	<a href="../index.php" class="">Kembali Website</a>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>