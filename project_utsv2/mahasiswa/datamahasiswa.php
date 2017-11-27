<?php
		include "koneksi.php";
		session_start();
		if (empty($_SESSION['nim']))
		{
			$error = "Gagal Masuk Dashboard";
				echo "<html>
							<script type=\"text/javascript\">
								alert(\"$error\");
								window.location = 'mahasiswa.php'
							</script>
						</html>";
		}
		else
		{
			$nim=$_SESSION['nim'];
			$query=mysql_query("SELECT * FROM mahasiswa where nim='$nim';");
			$data=mysql_fetch_array($query);
			$nim=$data['nim'];
			$nama=$data['nama'];
			$email=$data['email'];
			$password=$data['password'];
			$tgllhr=$data['tgllhr'];
			$kdjurusan=$data['kdjurusan'];
			$semester=$data['semester'];
			$alamat=$data['alamat'];
			$telp=$data['telp'];
		}
	?>
	
<h3 class="sub-header">
	Data Mahasiswa
	<p><small>Pastikan semua data terisi dengan benar.</small></p>
</h3>
<div class="container-fluid">
	<form class="form" action="simpandata.php" method="POST">			
		<label for="nim" >NIM</label>									
		<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim;?>" disabled>
		<label for="nama">Nama</label>
		<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
		<label for="password">Password</label>
		<input type="password" class="form-control" id="password" name="password" value="<?php echo $password;?>">
		<label for="tgllhr">Tanggal Lahir</label>
		<input type="date" class="form-control" id="tgllhr" name="tgllhr" value="<?php echo $tgllhr;?>">
		<label for="jurusan">Jurusan</label>
		<input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $kdjurusan;?>" disabled>
		<label for="semester">Semester</label>
		<input type="text" class="form-control" id="semester" name="semester" value="<?php echo $semester;?>" disabled>
		<label for="alamat">Email</label>
		<textarea class="form-control" id="alamat" name="alamat" style="height: 150px;"><?php echo $alamat;?></textarea>
		<label for="telp">Telepon / Handphone</label>
		<input type="number" class="form-control" id="telp" name="telp" value="<?php echo $telp;?>"><br>
		<button type="button" class="btn-lg btn-primary">Simpan</button>
	</form><br><br>
</div>