<?php
include "koneksi.php";

$Hapus = mysqli_query($konek, "DELETE FROM mapel WHERE idMapel='$_GET[idMapel]'");

if($Hapus){
	header('location:tampil.php');
}else{
	echo "Gagal Mengahapus Data";
}

?>