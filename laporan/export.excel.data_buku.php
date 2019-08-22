<?php
require_once('../config/koneksi.php');
require_once('../models/database.php');
include "../models/model_buku.php";
$connection = new Database($host, $user, $pass, $database);
$bk = new Buku($connection);
$filename = "excel_data-(".date('d-m-Y').").xls";
header("Content-Disposition: attachment; filename='$filename'");
header("Content-Type: application/vnd.ms-excel");
?>

<table border="1px">
	<tr>
		<th>No.</th>
		<th>Nama Buku</th>
		<th>Harga Buku</th>
		<th>Stok Buku</th>
		<th>Gambar Buku</th>
	</tr>
	<?php
    $no = 1;
    $tampil = $bk->tampil();
    while ($data = $tampil->fetch_object()) {
    	echo "<tr>";
    	echo "<td align=center>".$no++."</td>";
    	echo "<td>".$data->nama_buku."</td>";
    	echo "<td>".$data->harga_buku."</td>";
    	echo "<td>".$data->stok_buku."</td>";
    	echo "<td>".$data->gambar_buku."</td>";
    	echo "</tr>";
    }
	?>
</table>