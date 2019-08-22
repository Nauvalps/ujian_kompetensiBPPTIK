<?php
require_once('../config/koneksi.php');
require_once('../models/database.php');
include "../models/model_anggota.php";
$connection = new Database($host, $user, $pass, $database);
$ambildata = new Anggota($connection);

$id_anggota = $_POST['id_anggota'];
$nm_anggota = $connection->connect->real_escape_string($_POST['nm_anggota']);
$alamat = $connection->connect->real_escape_string($_POST['alamat']);
$status = $connection->connect->real_escape_string($_POST['status']);

if($edit = $_POST['id_anggota']) {
	$ambildata->edit("UPDATE anggota SET nama_anggota = '$nm_anggota', alamat = '$alamat', status_anggota = '$status' WHERE id_anggota = '$id_anggota'"); 
	echo "<script>window.location='?page=admin_anggota';</script>";
} else {
  echo "<script>alert('Edit data gagal !')</script>";
}

?>