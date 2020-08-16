<h3>Tambah Data Siswa<h3>
	<hr>
<fieldset>
	<form action="" method="POST">
		<label>NIS Siswa</label><br>
		<input type="text" name="NIS_Siswa"><br>
		<label>Nilai </label><br>
		<input type="text" name="Nilai"><br>
		<label>Kode Mapel</label><br>
		<input type="text" name="Mapel_idMapel"><br>
		<label>NIP Guru</label><br>
		<input type="text" name="Guru_NIP_Guru"><br>
		<input type="submit" value="Simpan Data">
	</form>	
</fieldset>
<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO nilai(NIS_Siswa,Nilai,Mapel_idMapel,Guru_NIP_Guru)
		VALUES('$_POST[NIS_Siswa]','$_POST[Nilai]','$_POST[Mapel_idMapel]','$_POST[Guru_NIP_Guru]')");
	if($simpan){
		header('location:tampil.php');
	}else{
		echo "Gagal Menyimpan";
	}
}
?>