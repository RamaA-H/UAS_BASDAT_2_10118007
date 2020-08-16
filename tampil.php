<h3>Data Siswa</h3>
<hr>
<a href="tambah.php">Tambah Data</a>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<th>NIS Siswa</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Alamat</th>
		<th>No Telp</th>
		<th>Aksi</th>
	</tr>

	<?php
	include "koneksi.php";
	
	$sqlSiswa = mysqli_query($konek, "SELECT * FROM siswa ORDER BY NIS_SISWA ASC ");
	while($d = mysqli_fetch_array($sqlSiswa)){
		echo "<tr>
		
		<td align='center'>$d[NIS_Siswa]</td>
		<td>$d[Nama_Siswa]</td>
		<td align='center'>$d[Kelas]</td>
		<td>$d[Alamat]</td>
		<td>$d[No_Telp]</td>
		<td align='center'>
		<a href='edit.php?NIS_Siswa=$d[NIS_Siswa]'>Edit</a> | <a href='Hapus.php?NIS_Siswa=$d[NIS_Siswa]'>Hapus</a>
		</td>
		</tr>";
		
	}
		?>

		</table>

		<h3>Data Guru</h3>
<hr>
<a href="tambahguru.php">Tambah Data</a>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<th>NIP Guru</th>
		<th>Nama Guru</th>
		<th>Kelas</th>
		<th>kode Mapel</th>
		<th>Aksi</th>
	</tr>
<?php
	include "koneksi.php";
	
	$sqlGuru = mysqli_query($konek, "SELECT * FROM guru ORDER BY NIP_Guru ASC ");
	while($d = mysqli_fetch_array($sqlGuru)){
		echo "<tr>
		
		<td align='center'>$d[NIP_Guru]</td>
		<td>$d[Nama_Guru]</td>
		<td align='center'>$d[Kelas_Kelas]</td>
		<td>$d[Mapel_idMapel]</td>
		<td align='center'>
		<a href='editguru.php?NIP_Guru=$d[NIP_Guru]'>Edit</a> | <a href='hapusguru.php?NIP_Guru=$d[NIP_Guru]'>Hapus</a>
		</td>
		</tr>";
		
	}
		?>
</table>

		<h3>Data Nilai</h3>
<hr>
<a href="tambahnilai.php">Tambah Nilai</a>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<th>NIS Siswa</th>
		<th>Nilai</th>
		<th>Kode Mapel</th>
		<th>NIP Guru</th>
	</tr>
<?php
	include "koneksi.php";
	
	$sqlnilai = mysqli_query($konek, "SELECT * FROM nilai ORDER BY NIS_Siswa ASC ");
	while($d = mysqli_fetch_array($sqlnilai)){
		echo "<tr>
		
		<td align='center'>$d[NIS_Siswa]</td>
		<td>$d[Nilai]</td>
		<td align='center'>$d[Mapel_idMapel]</td>
		<td>$d[Guru_NIP_Guru]</td>
		<td align='center'>
		<a href='editnilai.php?NIS_Siswa=$d[NIS_Siswa]'>Edit</a> | <a href='hapusnilai.php?NIS_Siswa=$d[NIS_Siswa]'>Hapus</a>
		</td>
		</tr>";
		
	}
		?>
</table>

<h3>Data Mapel</h3>
<hr>
<a href="tambahmapel.php">Tambah Mapel</a>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<th>Kode Mapel</th>
		<th>Nama_Mapel</th>
	</tr>
<?php
	include "koneksi.php";
	
	$sqlnilai = mysqli_query($konek, "SELECT * FROM mapel ORDER BY idMapel ASC ");
	while($d = mysqli_fetch_array($sqlnilai)){
		echo "<tr>
		
		<td align='center'>$d[idMapel]</td>
		<td>$d[Nama_Mapel]</td>
		<td align='center'>
		<a href='editmapel.php?idMapel=$d[idMapel]'>Edit</a> | <a href='hapusmapel.php?idMapel=$d[idMapel]'>Hapus</a>
		</td>
		</tr>";
		
	}
		?>
</table>