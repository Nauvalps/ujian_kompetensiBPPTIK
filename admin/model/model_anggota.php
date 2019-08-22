<?php
/**
* 
*/
class Anggota {
	private $mysqli;
	
	function __construct($connect) {
		$this->mysqli = $connect;
	}

	public function tampil($id = null) {
		$db1 = $this->mysqli->connect;
		$sql = "SELECT * FROM anggota";
		if ($id != null) {
			$sql .= " WHERE id_anggota = $id";
		}
		$query = $db1->query($sql) or die ($db1->error);
		return $query;
	}

	public function tambah($id_anggota, $nm_anggota, $alamat, $status) {
         $db1 = $this->mysqli->connect;
         $db1->query("INSERT INTO anggota VALUES ('$id_anggota', '$nm_anggota', '$alamat', '$status')") or die ($db1->error);
	}

	public function edit($sql){
		$db1 = $this->mysqli->connect;
		$db1->query($sql) or die ($db1->error);
	}

	public function delete($id){
       $db1 = $this->mysqli->connect;
       $db1->query("DELETE FROM anggota WHERE id_anggota = '$id'") or die ($db1->error);
	}

	function __destruct() {
		$db1 = $this->mysqli->connect;
		$db1->close();
	}
}
?>