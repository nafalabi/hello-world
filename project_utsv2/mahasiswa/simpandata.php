<?php
	include "koneksi.php";
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$tgllhr=$_POST['tgllhr'];
	$kdjurusan=$_POST['kdjurusan'];
	$semester=$_POST['semester'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	
	$query=msql_query("UPDATE `mahasiswa` SET `nama` = '$nama',
				`email` = '$email',
				`password` = '$password',
				`tgllhr` = '$tgllhr',
				`kdjurusan` = '$kdjurusan',
				`semester` = '$semester',
				`alamat` = '$alamat'
				`telp` = '$telp' WHERE `mahasiswa`.`nim` = '$nim';");
	if($query)
	{
		echo "";
	}
	else
	{
		
	}
?>