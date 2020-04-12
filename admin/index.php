<?php 
session_start();
require '../config.php';
$pengaduan = query("SELECT * FROM pengaduan");
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
      <a class="nav-item nav-link" href="../logout.php">logout</a>
      <a class="nav-item nav-link" href="#"><?php echo $_SESSION["petugas"]["username"]; ?></a>
    </div>
  </div>
  </div>
</nav>

  <div class="container mt-5">
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Isi Laporan</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; ?>
      <?php foreach($pengaduan as $p) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $p["nik"] ?></td>
        <td><?php echo $p["isi_laporan"]; ?></td>
        <?php if($p["status"] === "selesai") : ?>
          <td><span class="badge badge-success">Pengaduan Sukses</span></td>
        <?php else: ?>
        <td><a href="kirimTanggapan.php?id=<?php echo $p["id_pengaduan"] ?>" class="btn btn-primary">Kirim Tanggapan</a></td>
        <?php endif; ?>

      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>

</body>
</html>