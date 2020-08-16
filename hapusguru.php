<?php
include "koneksi.php";

$Hapus = mysqli_query($konek, "DELETE FROM guru WHERE NIP_Guru='$_GET[NIP_Guru]'");

if($Hapus){
	header('location:tampil.php');
}else{
	echo "Gagal Mengahapus Data";
}

?>