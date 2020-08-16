<h3>Edit Data Siswa<h3>
	<hr>
	<?php
	include "koneksi.php";
	$sqledit = mysqli_query($konek, "SELECT *FROM siswa WHERE NIS_Siswa='$_GET[NIS_Siswa]'");
	$e=mysqli_fetch_array($sqledit);
	?>
<fieldset>
	<form action="" method="POST">
		<label>NIS Siswa</label><br>
		<input type="text" name="NIS_Siswa" value="<?php echo $e['NIS_Siswa'];?>"readonly><br>
		<label>Nama Siswa</label><br>
		<input type="text" name="Nama_Siswa" value="<?php echo $e['Nama_Siswa'];?>"><br>
		<label>Kelas</label><br>
		<input type="text" name="Kelas" value="<?php echo $e['Kelas'];?>"><br>
		<label>Alamat</label><br>
		<input type="text" name="Alamat" value="<?php echo $e['Alamat'];?>"><br>
		<label>No_Telp</label><br>
		<input type="text" name="No_Telp" value="<?php echo $e['No_Telp'];?>"><br>
		<input type="submit" value="Simpan Data">
	</form>	
</fieldset>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$update = mysqli_query($konek, "UPDATE siswa SET Nama_Siswa='$_POST[Nama_Siswa]',
													Kelas='$_POST[Kelas]',
													Alamat='$_POST[Alamat]',
													No_Telp	='$_POST[No_Telp]'										
									WHERE NIS_Siswa='$_POST[NIS_Siswa]'");
	if($update){
		header('location:tampil.php');
	}else{
		echo "Gagal Merubah";
	}
}
?>