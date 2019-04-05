<!DOCTYPE html>
<html>
  <head>
    <title>
    List Nilai
    </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js">
    </script>
  </head>
  
  <body>
    <div class="container">
	  <h2>
	  Daftar Nilai Pemrograman Web 2
	  </h2>
	  
<table class='table table-bordered table-responsive'>
	<tr>
		<th>NPM</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Nilai</th>
		<th colspan="2" >Action</th>
	</tr>
<?php
require("crud.php");

$obj = new CRUD();
$show = $obj->showMhs();
while($data = $show->fetch(PDO::FETCH_OBJ)){
echo "
	<tr>
		<td>$data->NPM</td>
		<td>$data->nama</td>
		<td>$data->kelas</td>
		<td>$data->nilai</td>
		<td><center><a class='btn btn-info' href='edit.php?npm=$data->NPM'>Edit</center></td>
		<td><center><a class='btn btn-danger' href='list.php?delete=$data->id_mhs'>Delete</a></center></td>
	</tr>";
};
?>
</table>

<a href="index.php" class="btn btn-success">Tambah Nilai</a>
	</div>
  </body>
</html>
 
<?php
if(isset($_GET['delete'])) {
$del = $obj->deleteMhs($_GET['delete']);
if($del == "Success"){
header('Location: list.php');
}
}
?>