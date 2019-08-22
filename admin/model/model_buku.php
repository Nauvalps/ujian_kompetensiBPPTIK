<?php
/**
* 
*/
class Buku {
	private $mysqli;
	
	function __construct($connect) {
		$this->mysqli = $connect;
	}

	public function tampil($id = null) {
		$db1 = $this->mysqli->connect;
		$sql = "SELECT * FROM tb_buku";
		if ($id != null) {
			$sql .= " WHERE kode_buku = $id";
		}
		$query = $db1->query($sql) or die ($db1->error);
		return $query;
	}

	public function tambah($kode_buku, $nm_buku, $pengarang_buku, $stok_buku, $penerbit_buku) {
         $db1 = $this->mysqli->connect;
         $db1->query("INSERT INTO tb_buku VALUES ('$kode_buku', '$nm_buku', '$pengarang_buku', '$stok_buku', '$penerbit_buku')") or die ($db1->error);
	}

	public function edit($sql){
		$db1 = $this->mysqli->connect;
		$db1->query($sql) or die ($db1->error);
	}

	public function delete($id){
       $db1 = $this->mysqli->connect;
       $db1->query("DELETE FROM tb_buku WHERE kode_buku = '$id'") or die ($db1->error);
	}

	function __destruct() {
		$db1 = $this->mysqli->connect;
		$db1->close();
	}
}
?>
