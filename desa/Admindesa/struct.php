<!DOCTYPE html>
<html>
<head>
	<title>Struktur Desa</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
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
		<h2>Tambah Struktur</h2>
		<form action="tambah_Struktur.php" method="POST" enctype="multipart/form-data">
			<label for="Struktur">Gambar Struktur</label>
			<input type="file" name="Struktur" accept="image/*" required id="Struktur">
			<br><br>
			<button type="submit">Upload</button>
		</form>
		<br><br><br>
		<h2>Tampilan Struktur</h2>
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
				$filePath = "gambar_struktur/" . $fileName;

				// Tampilkan gambar
				echo "
				<div style='text-align: center;'>
				<form>
				<img src='$filePath' alt='Gambar Struktur Desa'style='max-width: 600px; height: auto;'>
				<br><br>
				<button type='submit' style='display: inline-block; background-color: blue; font-size: 25px; margin-right: 40px;'>
					<a href='edit_Struktur.php?id=" . $row['id'] . "' style='text-decoration: none; color: white; '>Ganti</a>
				</button> 
				<button type='submit' style='display: inline-block; background-color: red;  font-size: 25px;'>
					<a href='hapus_Struktur.php?id=" . $row['id'] . "' style='text-decoration: none; color: white; '>Hapus</a>
				</button>
				</form>
				<br><br><br><br><br><br><br>
			</div>";
		
		  }
		} else {
			echo "Tidak ada gambar yang tersedia.";
		}

		// Tutup koneksi database
		mysqli_close($db);
		?>


						
		<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>
</body>
</html>
