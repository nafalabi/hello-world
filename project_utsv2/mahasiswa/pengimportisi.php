<?php 
	if(empty($_GET['page']))
	{
		include"datamahasiswa.php";
	}
	else if($_GET['page']=="jadwalkuliah")
	{
		include "jadwalkuliah.php";
	}
	else if($_GET['page']=="datamahasiswa")
	{
		include "datamahasiswa.php";
	}
?>