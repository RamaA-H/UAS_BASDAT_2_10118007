<h3>Tambah Data Guru<h3>
	<hr>
<fieldset>
	<form action="" method="POST">
		<label>NIP Guru</label><br>
		<input type="text" name="NIP_Guru"><br>
		<label>Nama Guru</label><br>
		<input type="text" name="Nama_Guru"><br>
		<label>Kelas</label><br>
		<input type="text" name="Kelas_Kelas"><br>
		<label>Kode Mapel</label><br>
		<input type="text" name="Mapel_idMapel"><br>
		<input type="submit" value="Simpan Data">
	</form>	
</fieldset>
<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO guru(NIP_Guru,Nama_Guru,Kelas_Kelas,Mapel_idMapel)
		VALUES('$_POST[NIP_Guru]','$_POST[Nama_Guru]','$_POST[Kelas_Kelas]','$_POST[Mapel_idMapel]')");
	if($simpan){
		header('location:tampil.php');
	}else{
		echo "Gagal Menyimpan";
	}
}
?>