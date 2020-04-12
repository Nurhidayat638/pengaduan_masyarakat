<?php 
session_start();
require 'tampilan/header.php';
require 'config.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    
    // cek apakah tombol submit berhasil ditambahkan atau tidak
    if (kirim_pengaduan($_POST) > 0) {
        echo "<script>
              alert('Data berhasil dikirim');
              document.location.href = 'pengaduan.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal dikirim');
                document.location.href = 'pengaduan.php';
            </script>";
    }

}

 ?>

 <div class="container mt-5">
 	<div class="row">
 		<div class="col-md-7 offset-md-3">
 			<div class="card">
 				<div class="card-header">
 					Kirim Pengaduan
 				</div>
 				<div class="card-body">
 					<form method="post" action="" autocomplete="off" enctype="multipart/form-data">
 						<input type="hidden" name="nik" value="<?php echo $_SESSION["masyarakat"]["nik"]; ?>">
 						<div class="form-group">
 							<label>Isi Laporan</label>
 							<textarea name="isi_laporan" class="form-control"></textarea>
 						</div>
 						<div class="form-group">
		                    <label>Kirim Bukti</label>
		                    <input type="file" class="form-control" name="gambar">
		                </div>
		                <button type="submit" name="submit" class="btn btn-block btn-primary">Kirim</button>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>