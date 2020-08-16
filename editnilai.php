<h3>Edit Data Nilai<h3>
	<hr>
	<?php
	include "koneksi.php";
	$sqledit = mysqli_query($konek, "SELECT *FROM nilai WHERE NIS_Siswa='$_GET[NIS_Siswa]'");
	$e=mysqli_fetch_array($sqledit);
	?>
<fieldset>
	<form action="" method="POST">
		<label>NIS Siswa</label><br>
		<input type="text" name="NIS_Siswa" value="<?php echo $e['NIS_Siswa'];?>"readonly><br>
		<label>Nilai</label><br>
		<input type="text" name="Nilai" value="<?php echo $e['Nilai'];?>"><br>
		<label>Kode Mapel</label><br>
		<input type="text" name="Mapel_idMapel" value="<?php echo $e['Mapel_idMapel'];?>"><br>
		<label>NIP Guru</label><br>
		<input type="text" name="Guru_NIP_Guru" value="<?php echo $e['Guru_NIP_Guru'];?>"><br>
		<input type="submit" value="Simpan Data">
	</form>	
</fieldset>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$update = mysqli_query($konek, "UPDATE nilai SET Nilai='$_POST[Nilai]',
													Mapel_idMapel='$_POST[Mapel_idMapel]',
													Guru_NIP_Guru='$_POST[Guru_NIP_Guru]'
																							
									WHERE NIS_Siswa='$_POST[NIS_Siswa]'");
	if($update){
		header('location:tampil.php');
	}else{
		echo "Gagal Merubah";
	}
}
?>