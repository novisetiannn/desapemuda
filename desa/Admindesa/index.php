<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
    <link href="visimisi.css" rel="stylesheet" type="text/css" />
    <link href="visimisi.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <header>
    <img src="logo1.png" alt="Logo Desa">
    <h1>PEMERINTAHAN DESA PEMUDA</h1>
		<h2>
		<marquee behavior="scroll" direction="left">Selamat datang Didesa Pemuda	Kecamatan Pelaihari	Kabupaten Tanah Laut</marquee>
		</h2>
	</header>
    <nav>
    <a href="profil.php">Profil</a>
	<a href="berita.php">Berita</a>
		<a href="visimisi.php">Visi Misi</a>
		<a href="sambutan.php">Sambutan</a>
		<a href="Serdes.php">Sejarah</a>
		<div class="dropdown">
			<button class="dropbtn">Struktur Pemerintahan</button>
			<div class="dropdown-content">
			  <a href="struct_dulu.php">Pemerintahan Sebelumnya</a>
			  <a href="struct.php">Pemerintahan Sekarang</a>
			</div>
		</div>
		<a href="alupel.php">Alur Pelayanan</a>
		<a href="logout.php">Logout</a>
	</nav>
   
<section>
<h2 style =" text-align : center; ">Selamat Datang Di Layanan Sistem informasi Profil Desa Pemuda</h2>

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
		$query = "SELECT * FROM sambutan";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) > 0) {
			// Tampilkan semua gambar
		  while ($row = mysqli_fetch_assoc($result)){
				$fileName = $row['gambar'];
				$filePath = "gambar_sbmtn/" . $fileName;
				$isisbmtn= $row['isi_sbmtn'];
				$isisbmtn = nl2br($isisbmtn); // Mengubah baris baru menjadi tag <br>


				// Tampilkan gambar
				echo "
				<div style='text-align: center;'>
				<img src='$filePath' alt='Gambar Sambutan'style='max-width: 585px; height: auto;'><br><br>
				</div>";

			}
		} else {
			echo "<p>Tidak ada Sambutan yang tersedia.<p>";
		}

	?>
			

</section>
<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>
</body>
</html>  
