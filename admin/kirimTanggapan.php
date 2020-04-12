<?php 
session_start();
require '../config.php';
$id = $_GET["id"];
$pengaduan = query("SELECT * FROM pengaduan WHERE id_pengaduan = '$id'")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    
    // cek apakah tombol submit berhasil ditambahkan atau tidak
    if (kirim_tanggapan($_POST) > 0) {
        echo "<script>
              alert('Data berhasil dikirim');
              document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal dikirim');
                document.location.href = 'index.php';
            </script>";
    }

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Halaman Petugas</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand" href="#">Petugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">logout</a>
      <a class="nav-item nav-link" href="#"><?php echo $_SESSION["petugas"]["username"]; ?></a>
    </div>
  </div>
  </div>
</nav>

  <div class="container mt-5">
    <div class="row">
        <div class="col-md-7 offset-md-2">
          <div class="card">
              <div class="card-header">
                Form Kirim Tanggapan
              </div>
              <div class="card-body">
                <form method="post" action="">
                  <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                  <input type="hidden" name="id_petugas" value="<?php echo $_SESSION["petugas"]["id_petugas"]; ?>">
                  <input type="hidden" name="nik" value="<?php echo $_SESSION["petugas"]["nik"]; ?>">
                  <div class="form-group">
                    <label>Pesan</label>
                    <textarea class="form-control" readonly><?php echo $pengaduan["isi_laporan"]; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Tanggapan</label>
                    <textarea name="tanggapan" class="form-control"></textarea>
                  </div>
                  <button class="btn btn-block btn-primary" name="submit" type="submit">Kirim Tanggapan</button>
                </form>
              </div>
          </div>
        </div>
    </div>
  </div>

</body>
</html>