<?php
/**
* 
*/
class Peminjaman {
	private $mysqli;
	
	function __construct($connect) {
		$this->mysqli = $connect;
	}

	public function tampil($id = null) {
		$db1 = $this->mysqli->connect;
		$sql = "SELECT * FROM peminjaman";
		if ($id != null) {
			$sql .= " WHERE id_anggota = $id";
		}
		$query = $db1->query($sql) or die ($db1->error);
		return $query;
	}

	public function tambah($id_anggota, $nm_buku, $kode_buku, $tgl_pinjam, $tgl_kembali, $lama_pinjam, $keadaan_buku) {
         $db1 = $this->mysqli->connect;
         $db1->query("INSERT INTO peminjaman VALUES ('$id_anggota', '$nm_buku', '$kode_buku', '$tgl_pinjam', '$tgl_kembali','$lama_pinjam','$keadaan_buku')") or die ($db1->error);
	}

	public function edit($sql){
		$db1 = $this->mysqli->connect;
		$db1->query($sql) or die ($db1->error);
	}

	public function delete($id){
       $db1 = $this->mysqli->connect;
       $db1->query("DELETE FROM peminjaman WHERE id_anggota = '$id'") or die ($db1->error);
	}

	function __destruct() {
		$db1 = $this->mysqli->connect;
		$db1->close();
	}
}
?>
