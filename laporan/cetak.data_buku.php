<?php
require_once('../config/koneksi.php');
require_once('../models/database.php');
include "../models/model_buku.php";
$connection = new Database($host, $user, $pass, $database);
$bk = new Buku($connection);
$content = '
<style type="text/css">
.table {
	border-collapse:collapse;
}
.table th{
	padding:8px 5px;
	background-color:blue;
	color:#fff;
}
.table td{
   padding:5px;
}
img {
   width:70px;
}


</style>
';

$content .= '
<page>

   <div style="padding:4mm; border:1px solid;" align="center">
       <span style="font-size:25px;">Cetak Data PDF</span>
   </div>

   <div style="padding:20px 0 10px 0; font-size:15px;">
       Laporan data buku
   </div>

   <table border="1px" class="table">
      <tr>
         <th>No.</th>
         <th>Nama Buku</th>
         <th>Harga Buku</th>
         <th>Stok Buku</th>
         <th>Gambar Buku</th>
      </tr>';
      $no = 1;
      if (@$_GET['id'] != '') {
         $tampil = $bk->tampil(@$_GET['id']);
      } else {
         $tampil = $bk->tampil();
      }
      while ($data = $tampil-> fetch_object()) {
      	$content .= '
      	<tr>
      	    <td align="center">'.$no++.'</td>
      	    <td>'.$data->nama_buku.'</td>
      	    <td>Rp.'.number_format($data->harga_buku, 2, ",", ".").'</td>
      	    <td>'.$data->stok_buku.'</td>
             <td align="center"><img src="../assets/img/buku/'.$data->gambar_buku.'"></td>
      	</tr>
      	';
      }
$content .= '
   </table>

</page>
';

require_once('../assets/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('example.pdf');
?>