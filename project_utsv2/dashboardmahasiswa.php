<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/favicon.ico">

    <title>Dashboard Mahasiswa | Universitar Bina Indonesia Sejahtera</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Universitas BIS</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="mahasiswa/logoutmahasiswa.php">Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="active" id="datamahasiswa" onclick="loadisi('datamahasiswa');"><a href="#">Data Mahasiswa</a></li>
					<li class ="inactive" id="jadwalkuliah" onclick="loadisi('jadwalkuliah');"><a href="#">Jadwal Kuliah</a></li>
					<li class="inactive" id="logout"><a href="mahasiswa/logoutmahasiswa.php" >Log out</a></li>
				</ul>
			</div>
			
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Dashboard</h1>
				<div id="isi">
					<?php 
						
						function pengimportisi()
						{
							if(empty($_GET['page']))
							{
								include"mahasiswa/datamahasiswa.php";
							}
							else if($_GET['page']=="jadwalkuliah")
							{
								include "event.php";
							}
							
						}
						pengimportisi();
					?>
				</div>
				
				
				<footer class="panel-footer">
					<div class="container" >
						<p class="text-muted">Copyright &copy; Nanda Abi Fahmi 2017 Bootstrap Themes designed by BootstrapMaster.</p>
					</div>
				</footer>
				
			</div>
		</div>
	</div>
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
		function loadisi(asd)
		{	
			$.ajax
			({
				type: 'GET',
				url: "mahasiswa/pengimportisi.php?page="+asd,
				data: {},
				success: function(data1)
				{
					document.getElementById("isi").innerHTML = data1;
					if(asd=="datamahasiswa")
					{
						document.getElementById(asd).setAttribute("class","active");
						document.getElementById("jadwalkuliah").setAttribute("class","inactive");
						document.getElementById("logout").setAttribute("class","inactive");
					}
					else if(asd=="jadwalkuliah")
					{
						document.getElementById(asd).setAttribute("class","active");
						document.getElementById("datamahasiswa").setAttribute("class","inactive");
						document.getElementById("logout").setAttribute("class","inactive");
					}
					else if(asd=="logout")
					{
						document.getElementById(asd).setAttribute("class","active");
						document.getElementById("datamahasiswa").setAttribute("class","inactive");
						document.getElementById("jadwalkuliah").setAttribute("class","inactive");
					}
				}
			});
		}
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
