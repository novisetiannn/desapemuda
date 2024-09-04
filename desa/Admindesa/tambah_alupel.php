<!DOCTYPE html>
<html>
<head>
	<title>Struktur Desa</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
    <link href="visimisi.css" rel="stylesheet" type="text/css" />
    <link href="visimisi.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
	<header>
	<img src="logo1.png" alt="Logo Desa">
        <h1>PEMERINTAHAN DESA PEMUDA</h1>
        <h2>
            <marquee behavior="scroll" direction="left">Selamat datang di Desa Pemuda Kecamatan Pelaihari Kabupaten Tanah Laut</marquee>
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
	<h2>Tambah Alur Pelayanan</h2>


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

		// Cek apakah ada file yang diunggah
		if (isset($_FILES['Alupel'])) {
			$file = $_FILES['Alupel'];

			// Mendapatkan informasi file
			$fileName = $file['name'];
			$fileSize = $file['size'];
			$fileTmp = $file['tmp_name'];
			$fileType = $file['type'];
			
			// Memindahkan file yang diunggah ke direktori tujuan
			$targetDir = "gambar_Alupel";
			$targetFile = $targetDir .'/'. basename($fileName);

			
			
			if (move_uploaded_file($fileTmp, $targetFile)) {
				// File berhasil diunggah, simpan informasi ke dalam database
				$query = "INSERT INTO Alupel (Alupel) VALUES ('$fileName')";
				
				if (mysqli_query($db, $query)) {
					
					echo "Gambar berhasil ditambahkan.";
				} else {
					echo "Error: " . mysqli_error($db);
				}
			} else {
				echo "Terjadi kesalahan saat mengunggah file.";
			}
		}

		// Tutup koneksi database
		mysqli_close($db);
	?>
		<br><br>
        <button type="submit" style="background-color:black; color: white; font-size: 16px;">
    <a href="alupel.php" style="text-decoration: none; color: white;">Kembali</a></button>
	<br><br>

	<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>
</body>
</html> 