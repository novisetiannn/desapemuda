<!DOCTYPE html>
<html>
<head>
	<title>Profil Desa</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
	<style>
		.content {
			margin: 20px;
		}
		.content p {
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<header>
		<img src="logo1.png" alt="Logo Desa">
		<h1>PEMERINTAHAN DESA PEMUDA</h1>
		<h1>
			<marquee behavior="scroll" direction="left">Selamat datang Didesa Pemuda Kecamatan Pelaihari	Kabupaten Tanah Laut</marquee>
		</h1>
	</header>
	<nav>
		<div class="dropdown">
			<a href="index.php">
				<button class="dropbtn">Beranda</button>
			</a>
			<div class="dropdown-content">
				<a href="vismis.php">Visi Misi</a>
				<a href="alur.php">Alur Pelayanan Berkas</a>
			</div>
		</div>

		<a href="profil.php">Profil</a>
		<a href="sejarah.php">Sejarah</a>
		<div class="dropdown">
			<button class="dropbtn">Struktur Pemerintahan</button>
			<div class="dropdown-content">
				<a href="tabelstruktur.php">Pemerintahan Sebelumnya</a>
				<a href="pemdessekarang.php">Pemerintahan Sekarang</a>
			</div>
		</div>
		<a href="login.php">Login</a>
	</nav>
	<section>
		
		<?php
	  // Koneksi ke database
	  $server = "localhost"; // Nama server
	  $username = "root"; // Username pada phpMyAdmin
	  $password = ""; // Password pada phpMyAdmin
	  $nama_database = "db_warga"; // Nama database
	  
	  $db = mysqli_connect($server, $username, $password, $nama_database);
	  
	  // Cek koneksi database
	  if (!$db) {
		  die("Koneksi database gagal: " . mysqli_connect_error());
	  }
	  
	  // Query untuk mengambil data dari tabel
	  $query = "SELECT * FROM Profil";
	  
	  // Eksekusi query
	  $result = mysqli_query($db, $query);
	  
	  // Periksa apakah query berhasil dijalankan
	  if ($result) {
		  // Cek jumlah baris data yang dihasilkan
		  if (mysqli_num_rows($result) > 0) {
			 // Loop untuk menampilkan data dalam baris tabel
	  while ($row = mysqli_fetch_assoc($result)) {
		  $isiprofil = $row['isi_profil'];
		  $isiprofil = nl2br($isiprofil); // Mengubah baris baru menjadi tag <br>
		  echo "
					<div style='text-align: center;'>
					  <form>
					  <h2 style=\"text-align: center; font-weight: bold;\">".$row['judul_profil']."</h2>
					  <p style=\"text-align: justify;\">". $isiprofil ."</p>
					  </form>
					 </div>
					 <br><br><br>";
	  }
	  
			  
		  } else {
			  echo "Tidak ada data yang ditemukan.<br>";
		  }
	  } else {
		  echo "Error: " . mysqli_error($db);
	  }
	  
	  // Tutup koneksi database
	  mysqli_close($db);
	  ?>
	  <br>
	  <div style="text-align: center;">
		<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>

	</section>
	</footer>
</body>
</html>