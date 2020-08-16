<h3>Edit Data Guru<h3>
	<hr>
	<?php
	include "koneksi.php";
	$sqledit = mysqli_query($konek, "SELECT *FROM guru WHERE NIP_Guru='$_GET[NIP_Guru]'");
	$e=mysqli_fetch_array($sqledit);
	?>
<fieldset>
	<form action="" method="POST">
		<label>NIP Guru</label><br>
		<input type="text" name="NIS_Siswa" value="<?php echo $e['NIP_Guru'];?>"readonly><br>
		<label>Nama Guru</label><br>
		<input type="text" name="Nama_Guru" value="<?php echo $e['Nama_Guru'];?>"><br>
		<label>Kelas</label><br>
		<input type="text" name="Kelas_Kelas" value="<?php echo $e['Kelas_Kelas'];?>"><br>
		<label>Kode Mapel</label><br>
		<input type="text" name="Mapel_idMapel" value="<?php echo $e['Mapel_idMapel'];?>"><br>
		<input type="submit" value="Simpan Data">
	</form>	
</fieldset>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$update = mysqli_query($konek, "UPDATE guru SET Nama_Guru='$_POST[Nama_Guru]',
													Kelas_Kelas='$_POST[Kelas_Kelas]',
													Mapel_idMapel='$_POST[Mapel_idMapel]'							
									WHERE NIP_Guru='$_POST[NIP_Guru]'");
	if($update){
		header('location:tampil.php');
	}else{
		echo "Gagal Merubah";
	}
}
?>