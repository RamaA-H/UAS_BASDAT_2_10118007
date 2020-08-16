<h3>Edit Data Mapel<h3>
	<hr>
	<?php
	include "koneksi.php";
	$sqledit = mysqli_query($konek, "SELECT *FROM mapel WHERE idMapel='$_GET[idMapel]'");
	$e=mysqli_fetch_array($sqledit);
	?>
<fieldset>
	<form action="" method="POST">
		<label>Kode Mapel</label><br>
		<input type="text" name="idMapel" value="<?php echo $e['idMapel'];?>"readonly><br>
		<label>Nama Mapel</label><br>
		<input type="text" name="Nama_Mapel" value="<?php echo $e['Nama_Mapel'];?>"><br>
		<input type="submit" value="Simpan Data">
	</form>	
</fieldset>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$update = mysqli_query($konek, "UPDATE mapel SET Nama_Mapel='$_POST[Nama_Mapel]'			
									WHERE idMapel='$_POST[idMapel]'");
	if($update){
		header('location:tampil.php');
	}else{
		echo "Gagal Merubah";
	}
}
?>