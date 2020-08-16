<h3>Tambah Data Siswa<h3>
	<hr>
<fieldset>
	<form action="" method="POST">
		<label>NIS Siswa</label><br>
		<input type="text" name="NIS_Siswa"><br>
		<label>Nama Siswa</label><br>
		<input type="text" name="Nama_Siswa"><br>
		<label>Kelas</label><br>
		<input type="text" name="Kelas"><br>
		<label>Alamat</label><br>
		<input type="text" name="Alamat"><br>
		<label>No_Telp</label><br>
		<input type="text" name="No_Telp"><br>
		<input type="submit" value="Simpan Data">
	</form>	
</fieldset>
<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($konek, "INSERT INTO siswa(NIS_Siswa,Nama_Siswa,Kelas,Alamat,No_Telp)
		VALUES('$_POST[NIS_Siswa]','$_POST[Nama_Siswa]','$_POST[Kelas]','$_POST[Alamat]','$_POST[No_Telp]')");
	if($simpan){
		header('location:tampil.php');
	}else{
		echo "Gagal Menyimpan";
	}
}
?>