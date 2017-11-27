<?php 
	$koneksi=mysql_connect("localhost","root","") or die ("Gagal Terkoneksi dengan server".mysql_error());
	mysql_select_db("univ_bis",$koneksi) or die ("Database Gagal Terkoneksi".mysql_error());	
?>