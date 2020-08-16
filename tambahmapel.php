<h3>Tambah Data Mapel<h3>
	<hr>
<fieldset>
	<form action="" method="POST">
		<label>Kode Mapel</label><br>
		<input type="text" name="idMapel"><br>
		<label>Nama Mapel </label><br>
		<input type="text" name="Nama_Mapel"><br>

		<input type="submit" value="Simpan Data">
	</form>	
</fieldset>
<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO mapel(idMapel,Nama_Mapel)
		VALUES('$_POST[idMapel]','$_POST[Nama_Mapel]')");
	if($simpan){
		header('location:tampil.php');
	}else{
		echo "Gagal Menyimpan";
	}
}
?>