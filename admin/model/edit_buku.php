<?php
require_once('../config/koneksi.php');
require_once('../models/database.php');
include "../models/model_buku.php";
$connection = new Database($host, $user, $pass, $database);
$ambildata = new Buku($connection);

$kode_buku = $_POST['kode_buku'];
$nm_buku = $connection->connect->real_escape_string($_POST['nm_buku']);
$pengarang_buku = $connection->connect->real_escape_string($_POST['pengarang_buku']);
$stok_buku = $connection->connect->real_escape_string($_POST['stok_buku']);
$penerbit_buku = $connection->connect->real_escape_string($_POST['penerbit_buku']);

if($edit = $_POST['kode_buku']) {
	$ambildata->edit("UPDATE tb_buku SET judul_buku = '$nm_buku', pengarang_buku = '$pengarang_buku', stok_buku = '$stok_buku', penerbit_buku = '$penerbit_buku' WHERE kode_buku = '$kode_buku'"); 
	echo "<script>window.location='?page=buku';</script>";
} else {
  echo "<script>alert('Edit data gagal !')</script>";
}

?>