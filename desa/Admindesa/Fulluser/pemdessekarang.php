<!DOCTYPE html>
<html>
<head>
	<title>Profil Desa</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
	<style>
		.kata-sambutan {
		  font-size: 20px;
		  font-weight: bold;
		  color: blue;
		}
	  </style>
</head>
<body>
	<header>
    <img src="logo1.png" alt="Logo Desa">
	<h1>PEMERINTAHAN DESA PEMUDA</h1>
		<h1>
		<marquee behavior="scroll" direction="left">Selamat datang Didesa Pemuda	Kecamatan Pelaihari	Kabupaten Tanah Laut</marquee>
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
		<h2>Struktur Pemerintahan Desa Pemuda</h2>
		<br>
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
		$query = "SELECT * FROM struktur";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) > 0) {
			// Tampilkan semua gambar
		  while ($row = mysqli_fetch_assoc($result)){
				$fileName = $row['Struktur'];
				$filePath = "../gambar_struktur/" . $fileName;

				// Tampilkan gambar
				echo "
				<div style='text-align: center;'>
				<form>
				<img src='$filePath' alt='Gambar Struktur Desa'style='max-width: 600px; height: auto;'>
				</form>
				<br><br><br><br>
			</div>";
		
		  }
		} else {
			echo "Tidak ada gambar yang tersedia.";
		}

		// Tutup koneksi database
		mysqli_close($db);
		?>

</section>
						
		<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>
</body>
</html>
