<?php
class CRUD {
public function __construct() {
$this->db = new PDO('mysql:host=localhost;dbname=mahasiswa','root','root');
}

public function addMhs($npm, $nama, $kelas, $nilai) {
$sql = "INSERT INTO data (NPM, nama, kelas, nilai) VALUES('$npm', '$nama', '$kelas', '$nilai')";
$query = $this->db->query($sql);
if(!$query) {
return "Failed";
}
	else {
return "Success";
	}
}

public function editMhs($npm) {
$sql = "SELECT * FROM data WHERE NPM='$npm'";
$query = $this->db->query($sql);
return $query;
}

public function updateMhs($npm, $nama, $kelas, $nilai) {
$sql = "UPDATE data SET nama='$nama', kelas='$kelas', nilai='$nilai' WHERE NPM='$npm'";
$query = $this->db->query($sql);
if(!$query) {
return "Failed";
}
	else {
return "Success";
	}
}
 
public function showMhs(){
$sql = "SELECT * FROM data";
$query = $this->db->query($sql);
return $query;
}

public function deleteMhs($id){
$sql = "DELETE FROM data WHERE id_mhs='$id'";
$query = $this->db->query($sql);
if(!$query) {
return "Failed";
}
	else {
return "Success";
	}
}
}
?>