<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<script type="text/javascript" src="slick.js"></script>
	<title>Profil Desa</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
	<style>
		.kata-sambutan {
		  font-size: 14px;
		  text-align: justify;
		  color: black;
		}
		.slider {
			width: 70%;
			margin: 0 auto;
		}
		.slide-content {
			padding: 20px;
		}
		.slide-content a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
	<header>
		<img src="logo1.png" alt="Logo Desa">
		<h1>PEMERINTAHAN DESA PEMUDA</h1>
		<h2>
			<marquee behavior="scroll" direction="left">Selamat datang di Desa Pemuda, Kecamatan Pelaihari, Kabupaten Tanah Laut</marquee>
		</h2>
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
		$server = "localhost";
		$username = "root";
		$password = "";
		$nama_database = "db_warga";

		$db = mysqli_connect($server, $username, $password, $nama_database);

		// Cek koneksi database
		if (!$db) {
			die("Koneksi database gagal: " . mysqli_connect_error());
		}

		// Query untuk mengambil informasi file gambar dari database
		//menjalankan query SELECT dan menyimpan hasilnya dalam variabel $result.
		$query = "SELECT * FROM sambutan";
		$result = mysqli_query($db, $query);
		//mysqli_query digunakan untuk menjalankan perintah SQL ke 
		//database yang terhubung melalui variabel $db.

		//untuk memeriksa jumlah baris yang dihasilkan dari query. 
		if (mysqli_num_rows($result) > 0) {
			
			// Tampilkan semua gambar
			//mysqli_fetch_assoc() untuk mengembalikan setiap
			// baris data dalam bentuk array asosiatif
			//yang disimpan pada varibel $result 
		  while ($row = mysqli_fetch_assoc($result)){

			//digunakan untuk mengambil nilai dari kolom 'gambar' 
			// Nilai ini kemudian disimpan dalam variabel $fileName.
				$fileName = $row['gambar'];
				
			//digunakan untuk membuat jalur file untuk gambar yang akan ditampilkan
			//variabel $fileName adalah nama file gambar yang diperoleh dari data saat ini
				$filePath = "../gambar_sbmtn/" . $fileName;
				$isisbmtn= $row['isi_sbmtn'];
				$isisbmtn = nl2br($isisbmtn); // Mengubah baris baru menjadi tag <br>


				// Tampilkan gambar
				echo "
				<div style='text-align: center;'>
				<form>
				<img src='$filePath' alt='Gambar Sambutan'style='max-width: 585px; height: auto;'><br><br>
				<h3 style=\"text-align: center; font-weight: bold;\">".$row['judulsbmtn']."</h3>
				<p style=\"text-align: justify;\">". $isisbmtn ."</p>
			
				
				</div>";
		
		  }
		} else {
			echo "<p>Tidak ada Sambutan yang tersedia.<p>";
		}
	?><br><br>
	<h2>Berita Desa Pemuda</h2>
	<?php

//berita
// Koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$nama_database = "db_warga";

$db = mysqli_connect($server, $username, $password, $nama_database);

// Cek koneksi database
if (!$db) {
	die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query untuk mengambil informasi file gambar dari database
$query = "SELECT * FROM berita ORDER BY id DESC";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
	// Tampilkan semua gambar
  while ($row = mysqli_fetch_assoc($result)){
		$fileName = $row['Gambar'];
		$filePath = "../gambar_berita/" . $fileName;
		$isiBerita = $row['Isi_berita'];
		$isiBerita = nl2br($isiBerita); // Mengubah baris baru menjadi tag <br>


		// Tampilkan gambar
		echo "
		<div style='text-align: center;'>
		<form>
		<img src='$filePath' alt='Gambar Berita'style='max-width: 585px; height: auto;'><br><br>
		<h3 style=\"text-align: center; font-weight: bold;\">".$row['Judul']."</h3>
		<p style=\"text-align: justify;\">". $isiBerita ."</p>
		<p> (". $row ['Tanggal'] .")<p><br><br><br>
		</div>";

	  }
} else {
	echo "<h3>Tidak ada berita yang tersedia.<h3>";
}

		// Tutup koneksi database
		mysqli_close($db);
		?>


						
		<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>

	</section>
	</footer>
</body>
</html>