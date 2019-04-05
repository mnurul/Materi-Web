<?php
require('crud.php');
 
if(isset($_GET['npm'])) {
$obj = new CRUD();
$mhs = $obj->editMhs($_GET['npm']);
$edit = $mhs->fetch(PDO::FETCH_OBJ);
echo '
<!DOCTYPE html>
<html>
  <head>
    <title>
    Edit Nilai
    </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js">
    </script>
  </head>
  
  <body>
    <div class="container">
	  <h2>
	  Edit Nilai Pemrograman Web 2
	  </h2>

      <table class="table table-bordered table-responsive">
        <form action="edit.php" method="POST" class="form-group row">
          <td>
            <input type="text" name="npm" value="'.$edit->NPM.'" class="form-control" placeholder="NPM" readonly>
          </td>
          <td>
            <input type="text" name="nama" value="'.$edit->nama.'" class="form-control" placeholder="Nama Mahasiswa" required>
          </td>
		  <td>
            <input type="text" name="kelas" value="'.$edit->kelas.'" class="form-control" placeholder="Kelas" required>
          </td>
          <td>
            <input type="text" name="nilai" value="'.$edit->nilai.'" class="form-control" placeholder="Nilai" required>
          </td>
          <tr>
            <td>
              <input type="submit" name="updateNilai" value="Update Nilai" class="btn btn-warning">
            </td>
          </tr>
        </form>
      </table>
	  <center><a href="list.php" class="btn btn-info">List Nilai</a></center>
</div>
</body>
</html>
';
}
 
if(isset($_POST['updateNilai'])){
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai = $_POST['nilai'];
 
$obj = new CRUD();
$upd = $obj->updateMhs($npm, $nama, $kelas, $nilai);
if($upd == "Success"){
header('Location: list.php');
}
}
 
?>