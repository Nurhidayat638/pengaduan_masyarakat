<?php 
session_start();
require 'tampilan/header.php';
require 'config.php';

$nik = $_SESSION["masyarakat"]["nik"];
$tanggapan = query("SELECT * FROM tanggapan  WHERE nik = '$nik'");

 ?>

 <div class="container mt-5">
 	<div class="row">
 		<div class="col-md-12 mt-5">
 			<table class="table table-striped">
 				<thead>
 					<tr>
 						<th>No</th>
 						<th>Tanggal Tanggapan</th>
 						<th>Tanggapan</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php $no=1; ?>
 					<?php foreach($tanggapan as $t) : ?>
 					<tr>
 						<td><?php echo $no++ ?></td>
 						<td><?php echo $t["tgl_tanggapan"]; ?></td>
 						<td><?php echo $t["tanggapan"]; ?></td>
 					</tr>
 					<?php endforeach ?>
 				</tbody>
 			</table>
 		</div>
 	</div>
 </div>