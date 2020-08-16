<?php
include "koneksi.php";

$Hapus = mysqli_query($konek, "DELETE FROM nilai WHERE NIS_Siswa='$_GET[NIS_Siswa]'");

if($Hapus){
	header('location:tampil.php');
}else{
	echo "Gagal Mengahapus Data";
}

?>