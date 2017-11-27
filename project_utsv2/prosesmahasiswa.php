<?php
	include "koneksi.php";
	$error=''; // Variabel untuk menyimpan pesan error
	if (empty($_POST['Email']) || empty($_POST['Password'])) 
	{
		$error = "Username atau Password salah";
		echo "<html>
							<script type=\"text/javascript\">
								alert(\"$error\");
								window.location = 'mahasiswa.php'
							</script>
						</html>";
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['Email'];
		$password=$_POST['Password'];
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// Seleksi Database
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysql_query("select * from mahasiswa where password='$password' AND email='$username'", $koneksi);
		$data=mysql_fetch_array($query);
		$rows = mysql_num_rows($query);
			if ($rows == 1) 
			{
				session_start(); // Memulai Session
				$_SESSION['email']=$username; // Membuat Sesi/session
				$_SESSION['nim']=$data['nim'];
				header("location: dashboardmahasiswa.php"); // Mengarahkan ke halaman profil
			}
			else 
			{
				$error = "Username atau Password salah";
				echo "<html>
							<script type=\"text/javascript\">
								alert(\"$error\");
								window.location = 'mahasiswa.php'
							</script>
						</html>";
			}
	}
?>