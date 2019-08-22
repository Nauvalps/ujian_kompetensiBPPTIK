<?php
require_once('../config/koneksi.php');
require_once('../models/database.php');
include "../models/model_buku.php";
$connection = new Database($host, $user, $pass, $database);
$ambildata = new Buku($connection);

$id_anggota = $_POST['id_anggota_peminjaman'];
$nama_anggota =	$connection->connect->real_escape_string($_POST['nama_anggota']); 
$kode_buku = $connection->connect->real_escape_string($_POST['kode_buku']);
$tgl_pinjam = $connection->connect->real_escape_string($_POST['tgl_pinjam']);
$tgl_kembali = $connection->connect->real_escape_string($_POST['tgl_kembali']);
$lama_pinjam = $connection->connect->real_escape_string($_POST['lama_pinjam']);
$keadaan_buku = $connection->connect->real_escape_string($_POST['keadaan_buku']);

if($edit = $_POST['id_anggota_peminjaman']) {
	$ambildata->edit("UPDATE peminjaman SET nama_anggota = '$nama_anggota', kode_buku = '$kode_buku', tgl_pinjam = '$tgl_pinjam', tgl_kembali = '$tgl_kembali', lama_pinjam = '$lama_pinjam', keadaan_buku = '$keadaan_buku' WHERE id_anggota_peminjaman = '$id_anggota'"); 
	echo "<script>window.location='?page=peminjaman';</script>";
} else {
  echo "<script>alert('Edit data gagal !')</script>";
}

?>